jQuery(document).ready(function($) {

	// Счетчик виджетов
	var widgetCount = $('.wbh-widget-field').length;

	// Обновление индексов и заголовков
	function updateWidgetIndexes() {
		$('.wbh-widget-field').each(function(index) {
			$(this).attr('data-index', index);
			$(this).find('h3').text('Виджет #' + (index + 1));

			// Обновляем имена и ID полей
			$(this).find('textarea').attr({
				'name': 'wbh_widgets[' + index + '][html]',
				'id': 'wbh_widgets_' + index + '_html'
			});

			$(this).find('select').attr({
				'name': 'wbh_widgets[' + index + '][location]',
				'id': 'wbh_widgets_' + index + '_location'
			});

			$(this).find('label[for*="_html"]').attr('for', 'wbh_widgets_' + index + '_html');
			$(this).find('label[for*="_location"]').attr('for', 'wbh_widgets_' + index + '_location');
		});

		// Показываем/скрываем кнопки удаления
		if ($('.wbh-widget-field').length <= 1) {
			$('.wbh-remove-widget').hide();
		} else {
			$('.wbh-remove-widget').show();
		}
	}

	// Добавление нового виджета
	$('#wbh-add-widget').on('click', function() {
		var button = $(this);
		button.prop('disabled', true);

		$.ajax({
			url: wbh_ajax.ajax_url,
			type: 'POST',
			data: {
				action: 'wbh_get_widget_field',
				index: widgetCount,
				nonce: wbh_ajax.nonce
			},
			success: function(response) {
				$('#wbh-widgets-container').append(response);
				widgetCount++;
				updateWidgetIndexes();
				button.prop('disabled', false);

				// Прокручиваем к новому виджету
				$('html, body').animate({
					scrollTop: $('.wbh-widget-field:last').offset().top - 100
				}, 500);
			},
			error: function() {
				alert('Ошибка при добавлении виджета');
				button.prop('disabled', false);
			}
		});
	});

	// Удаление виджета
	$(document).on('click', '.wbh-remove-widget', function() {
		if ($('.wbh-widget-field').length <= 1) {
			alert('Нельзя удалить последний виджет');
			return;
		}

		if (confirm('Вы уверены, что хотите удалить этот виджет?')) {
			$(this).closest('.wbh-widget-field').fadeOut(300, function() {
				$(this).remove();
				widgetCount--;
				updateWidgetIndexes();
			});
		}
	});

	// Обработка сохранения для публичной страницы
	$('#wbh-save-public').on('click', function(e) {
		e.preventDefault();
		
		var button = $(this);
		button.prop('disabled', true).text('Сохранение...');
		
		// Собираем данные формы
		var widgets = [];
		$('.wbh-widget-field').each(function() {
			var html = $(this).find('textarea').val();
			var location = $(this).find('select').val();
			
			widgets.push({
				html: html,
				location: location
			});
		});
		
		$.ajax({
			url: wbh_ajax.ajax_url,
			type: 'POST',
			data: {
				action: 'wbh_save_settings',
				widgets: widgets
			},
			success: function(response) {
				if (response.success) {
					button.text('Сохранено!');
					setTimeout(function() {
						button.prop('disabled', false).text('Сохранить изменения');
					}, 2000);
				} else {
					alert('Ошибка при сохранении');
					button.prop('disabled', false).text('Сохранить изменения');
				}
			},
			error: function() {
				alert('Ошибка при сохранении');
				button.prop('disabled', false).text('Сохранить изменения');
			}
		});
	});

	// Предварительный просмотр HTML
	$(document).on('input', 'textarea[name*="[html]"]', function() {
		var $textarea = $(this);
		var $field = $textarea.closest('.wbh-widget-field');
		var $preview = $field.find('.wbh-preview');

		// Создаем блок предпросмотра, если его нет
		if ($preview.length === 0) {
			$preview = $('<div class="wbh-preview"><h4>Предпросмотр:</h4><div class="wbh-preview-content"></div></div>');
			$field.find('.form-table').after($preview);
		}

		var html = $textarea.val();
		if (html.trim() === '') {
			$preview.hide();
		} else {
			$preview.show();
			$preview.find('.wbh-preview-content').html(html);
		}
	});

	// Стили для предпросмотра
	$('<style>')
		.text(`
			.wbh-preview {
				margin-top: 20px;
				padding: 15px;
				background: #fff;
				border: 2px dashed #ddd;
				border-radius: 4px;
			}
			.wbh-preview h4 {
				margin: 0 0 10px 0;
				color: #666;
			}
			.wbh-preview-content {
				background: #f9f9f9;
				padding: 15px;
				border: 1px solid #e5e5e5;
				border-radius: 4px;
				min-height: 50px;
			}
			.wbh-preview-content:empty::after {
				content: "Здесь будет отображаться предпросмотр вашего HTML";
				color: #999;
				font-style: italic;
			}
		`)
		.appendTo('head');

	// Инициализация предпросмотра для существующих виджетов
	$('textarea[name*="[html]"]').trigger('input');

});