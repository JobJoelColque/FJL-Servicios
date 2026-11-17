document.addEventListener("DOMContentLoaded", function () {

    const elementos = document.querySelectorAll(".zoom-in");

    const observer = new IntersectionObserver((entradas) => {

        entradas.forEach((entrada) => {

            if (entrada.isIntersecting) {

                entrada.target.classList.add("visible");

                // La animación se ejecuta una sola vez
                observer.unobserve(entrada.target);

            }

        });

    }, {
        threshold: 0.1
    });

    elementos.forEach((elemento) => {
        observer.observe(elemento);
    });

});