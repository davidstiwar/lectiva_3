window.addEventListener('scroll', function() {
    const navbar = document.getElementById('navbar');
    const scrollPosition = window.scrollY || document.documentElement.scrollTop;

    // Ajusta la opacidad de la navbar según el desplazamiento (0 = totalmente visible, 1 = oculto)
    navbar.style.opacity = Math.max(1 - scrollPosition / 300, 0);
});

