document.querySelectorAll("nav ul li a").forEach((link) => {
    link.addEventListener("click", function (e) {
      const href = this.getAttribute("href");
  
      // Verifica si es una URL externa o archivo PHP
      if (href.includes(".php") || href.startsWith("http")) {
        return; // Permite el comportamiento normal del enlace
      }
  
      e.preventDefault();
      const targetId = href.substring(1);
      const targetSection = document.getElementById(targetId);
  
      if (!targetSection) {
        console.error("Sección no encontrada:", targetId);
        return;
      }
  
      // Calcula la posición considerando el header fijo
      const headerHeight = document.querySelector("header").offsetHeight;
      const targetPosition = targetSection.offsetTop - headerHeight;
  
      window.scrollTo({
        top: targetPosition,
        behavior: "smooth",
      });
    });
  });