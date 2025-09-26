// Navbar scroll effect
document.addEventListener('DOMContentLoaded', function() {
    const navbar = document.querySelector('.navbar');
    
    if (!navbar) return;
    
    function handleScroll() {
        const scrollTop = window.pageYOffset || document.documentElement.scrollTop;
        
        if (scrollTop > 50) {
            navbar.classList.add('scrolled');
        } else {
            navbar.classList.remove('scrolled');
        }
    }
    
    // Agregar event listener para el scroll
    window.addEventListener('scroll', handleScroll);
    
    // Ejecutar una vez al cargar para el estado inicial
    handleScroll();
});

// Mobile menu toggle functionality
document.addEventListener('DOMContentLoaded', function() {
    const hamburger = document.querySelector('.hamburger');
    const navMenu = document.querySelector('.nav-menu');
    
    if (hamburger && navMenu) {
        hamburger.addEventListener('click', function() {
            hamburger.classList.toggle('active');
            navMenu.classList.toggle('active');
        });
        
        // Cerrar menú al hacer click en un enlace (mobile)
        const navLinks = document.querySelectorAll('.nav-link');
        navLinks.forEach(link => {
            link.addEventListener('click', () => {
                hamburger.classList.remove('active');
                navMenu.classList.remove('active');
            });
        });
    }
});
