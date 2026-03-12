function show(e) {
    document.getElementById(e).style.display = "block";
}
function hide(e) {
    document.getElementById(e).style.display = "none";
}
var pride_Anim = function () {
        $(".anim_bounce").appear(function () {
            $(this).addClass("bounceIn");
        }),
            $(".anim_fadein").appear(function () {
                $(this).addClass("fadeInUp");
            }),
            $(".anim_left").appear(function () {
                $(this).addClass("fadeInLeft");
            }),
            $(".anim_right").appear(function () {
                $(this).addClass("fadeInRight");
            });
			$(".anim_zoom").appear(function () {
                $(this).addClass("zoomIn");
            });
    }, 
    last_tab = "list";
$(document).ready(function () {
    pride_Anim();
});
