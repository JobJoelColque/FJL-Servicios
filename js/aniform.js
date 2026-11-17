document.addEventListener("DOMContentLoaded", function () {

    const elementos = document.querySelectorAll(".zoom-out");

    const observer = new IntersectionObserver((entradas) => {

        entradas.forEach((entrada) => {

            if (entrada.isIntersecting) {

                entrada.target.classList.add("visible");

                // Ejecutar la animación una sola vez
                observer.unobserve(entrada.target);

            }

        });

    }, {
        root: null,
        rootMargin: "0px 0px -120px 0px",
        threshold: 0
    });

    elementos.forEach((elemento) => {
        observer.observe(elemento);
    });

});