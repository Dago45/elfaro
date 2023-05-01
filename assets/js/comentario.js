/*Constantes para iniciar el formulario de contacto. */
const form = document.querySelector("form");
const nombre = document.getElementById("nombre");
const correo = document.getElementById("correo");
const mensaje = document.getElementById("mensaje");

/*Funcion para validar formulario de contacto*/
form.addEventListener("submit", function (event) {
  event.preventDefault();

  if (nombre.value === "" || mensaje.value === "" || correo.value === "") {
    Swal.fire("Por favor, complete todos los campos");
  } else {
    Swal.fire(`Gracias por contactarnos :D, ${nombre.value}! Su mensaje ha sido enviado :).`);
    form.cerrarVista();
  }
});

function cerrarVista() {
  window.opener.location.close();
}