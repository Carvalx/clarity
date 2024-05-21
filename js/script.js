document.addEventListener("DOMContentLoaded", function() {
    let dropdown = document.querySelector(".dropdown");
    let boton = dropdown.querySelector(".boton-servicios");
    let dropdownServicios = dropdown.querySelector(".dropdown-content");

    boton.addEventListener("mouseover", function() {
        dropdownServicios.style.display = "block";
    });

    dropdown.addEventListener("mouseover", function() {
        dropdownServicios.style.display = "block";
    });

    dropdown.addEventListener("mouseleave", function() {
        dropdownServicios.style.display = "none";
    });
});