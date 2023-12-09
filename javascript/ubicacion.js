//creacion de la ubicacion de la pagina//
var pais = document.getElementById("pais");

pais.addEventListener("click", function() {
    var idiomaNavegador = navigator.language;
    redirigirSegunIdioma(idiomaNavegador);
});

function redirigirSegunIdioma(idioma) {
    switch (idioma) {
        case "en":
            window.location.href = "https://www.example.com/en";
            break;
        case "es":
            window.location.href = "https://www.example.com/es";
            break;
        default:
            window.location.href = "https://www.example.com/default";
            break;
    }
}

//efecto del icono del soporte//

const iconoSoporte = document.querySelector(".soporte_icono");

iconoSoporte.addEventListener("mouseenter", () => {
    iconoSoporte.style.transform = "translateY(-20px)"; 
});

iconoSoporte.addEventListener("mouseleave", () => {
    iconoSoporte.style.transform = "translateY(0)";
});  