export function resourcesFilters() {
    const toggleBtn = document.getElementById('sidebarToggle');
    const closeBtn = document.getElementById('sidebarClose');
    const sidebarWrapper = document.querySelector('.v2resources__sidebar-wrapper');
    const sidebar = document.querySelector('.v2resources__sidebar');

    toggleBtn.addEventListener('click', () => {
        sidebarWrapper.classList.toggle('open');
    });

    closeBtn.addEventListener('click', () => {
        sidebarWrapper.classList.remove('open');
    });

    document.addEventListener('click', (e) => {
        const isClickInside = sidebar.contains(e.target) || toggleBtn.contains(e.target);

        if (!isClickInside && sidebarWrapper.classList.contains('open')) {
          sidebarWrapper.classList.remove('open');
        }
      });
}
