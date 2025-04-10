
  document.addEventListener('DOMContentLoaded', () => {
    const aboutSection = document.querySelector('.about');

    // Función para verificar si la sección está en la vista
    const checkVisibility = () => {
      const rect = aboutSection.getBoundingClientRect();
      const isVisible = rect.top >= 0 && rect.bottom <= window.innerHeight;

      if (isVisible) {
        aboutSection.classList.add('visible');
      }
    };

    // Llamar a la función cuando el usuario haga scroll
    window.addEventListener('scroll', checkVisibility);

    // Llamar a la función inmediatamente para comprobar la visibilidad al cargar la página
    checkVisibility();
  });

