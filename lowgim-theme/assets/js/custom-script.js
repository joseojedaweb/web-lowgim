document.addEventListener('DOMContentLoaded', function () {
    var navbar = document.querySelector('.navbar');

    function handleScroll() {
        if (window.scrollY > 100) {
            navbar.classList.add('scrolled');
            navbar.classList.remove('transparent-navbar');
        } else {
            if (window.lowgimData && window.lowgimData.isFrontPage) {
                navbar.classList.remove('scrolled');
                navbar.classList.add('transparent-navbar');
            }
        }
    }

    window.addEventListener('scroll', handleScroll);
    handleScroll(); // Ejecutar al cargar
});
