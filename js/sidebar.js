document.addEventListener('DOMContentLoaded', () => {
  const sidebar = document.querySelector('.sidebar');
  const sidebarToggle = sidebar.querySelector('.sidebar-toggle');
  const cartBtn = document.querySelector('[aria-label="Cart button"]');

  sidebarToggle.addEventListener('click', () => {
    sidebar.classList.toggle('sidebar--close');
    cartBtn.style.pointerEvents = 'none';
  })

  cartBtn.addEventListener('click', () => {
    sidebar.classList.remove('sidebar--close');
  })

  document.addEventListener('click', (e) => {
    if (!sidebar.contains(e.target) && e.target !== cartBtn) {
      sidebar.classList.add('sidebar--close');
      cartBtn.style.pointerEvents = 'auto';
    }
  })

  document.addEventListener('keydown', (e) => {
    if (e.key === 'Escape') {
      sidebar.classList.add('sidebar--close');
      cartBtn.style.pointerEvents = 'auto';
    }
  })
})