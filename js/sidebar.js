document.addEventListener('DOMContentLoaded', () => {
  const sidebar = document.querySelector('.sidebar');
  const sidebarToggle = sidebar.querySelector('.sidebar-toggle');

  sidebarToggle.addEventListener('click', () => {
    sidebar.classList.toggle('sidebar--open');
  })
})