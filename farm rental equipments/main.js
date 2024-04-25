document.addEventListener('DOMContentLoaded', function() {
    const menuIcon = document.getElementById('menu-icon');
    const navbar = document.querySelector('.navbar');

    // Function to toggle responsive menu
    function toggleMenu() {
        navbar.classList.toggle('show-menu');
    }

    // Event listener for menu icon click
    menuIcon.addEventListener('click', toggleMenu);

    // Event listener for window resize
    window.addEventListener('resize', function() {
        // If window width is greater than 768px, hide the menu
        if (window.innerWidth > 768) {
            navbar.classList.remove('show-menu');
        }
    });
});
