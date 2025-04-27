const menuBtn = document.getElementById('menuBtn');
    const sidebar = document.getElementById('sidebar');
    const mainContent = document.getElementById('mainContent');

    menuBtn.addEventListener('click', () => {
      sidebar.classList.toggle('open');
      mainContent.classList.toggle('shifted');
    });