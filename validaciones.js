document.addEventListener("DOMContentLoaded", function () {
    const registroForm = document.getElementById("registro-form");
    if (registroForm) {
        registroForm.addEventListener("submit", function (event) {
            if (!validarRegistro()) {
                event.preventDefault();
            }
        });
    }
});

function validarRegistro() {
    let nombre = document.getElementById("nombre").value.trim();
    let email = document.getElementById("email").value.trim();
    let password = document.getElementById("password").value;
    let confirmPassword = document.getElementById("confirm-password").value;
    let edad = document.getElementById("edad").value;
    let genero = document.getElementById("genero").value;
    let terminos = document.querySelector("input[name='terminos']").checked;

    if (nombre.length < 3) {
        alert("El nombre debe tener al menos 3 caracteres.");
        return false;
    }

    if (!validarEmail(email)) {
        alert("Por favor, ingrese un correo electrónico válido.");
        return false;
    }

    if (password.length < 6) {
        alert("La contraseña debe tener al menos 6 caracteres.");
        return false;
    }

    if (password !== confirmPassword) {
        alert("Las contraseñas no coinciden.");
        return false;
    }

    if (edad < 18 || edad > 99) {
        alert("La edad debe estar entre 18 y 99 años.");
        return false;
    }

    if (genero === "") {
        alert("Seleccione un género.");
        return false;
    }

    if (!terminos) {
        alert("Debe aceptar los términos y condiciones.");
        return false;
    }

    return true;
}

function validarEmail(email) {
    const regex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    return regex.test(email);
}
