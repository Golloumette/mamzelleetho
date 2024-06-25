/*
* NavBar.js
* */
document.addEventListener('DOMContentLoaded', (event) => {
    const navLinks = document.querySelectorAll('.navbar-nav .nav-link');
    const navText = document.getElementById('navTextLocalisation');

    // Récupérer la page sélectionnée depuis localStorage
    const currentPage = localStorage.getItem('currentPage');
    if (currentPage) {
        navText.textContent = currentPage;
    }

    navLinks.forEach(link => {
        link.addEventListener('click', (e) => {
            const page = link.getAttribute('data-page');
            navText.textContent = page;
            // Stocker la page sélectionnée dans localStorage
            localStorage.setItem('currentPage', page);
        });
    });
});
