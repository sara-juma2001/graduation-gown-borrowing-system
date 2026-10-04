document.addEventListener('DOMContentLoaded', () => {
  document.querySelectorAll('[data-confirm]').forEach(button => {
    button.addEventListener('click', e => {
      if (!confirm(button.dataset.confirm)) e.preventDefault();
    });
  });
});
