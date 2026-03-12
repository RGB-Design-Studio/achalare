
  document.querySelectorAll('.tab').forEach(btn => btn.addEventListener('click', e => {
    document.querySelectorAll('.tab').forEach(t=>t.classList.remove('active'));
    e.currentTarget.classList.add('active');
    const tab = e.currentTarget.getAttribute('data-tab');
    document.querySelectorAll('.panel').forEach(p=>p.style.display='none');
    document.getElementById(tab).style.display='block';
  }));
