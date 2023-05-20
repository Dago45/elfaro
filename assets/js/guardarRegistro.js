function abrirRegistro() {
  let ventanaRegistro = window.open(
    "registro.php",
    "MiVentanaEmergente",
    "width=420,height=800"
  );
}



const form = document.querySelector("form");
const nombre = document.getElementById("nombre");
const correo = document.getElementById("correo");
const mensaje = document.getElementById("mensaje");

function guardarRegistro() {
    if (nombre.value === "" || correo.value === "" || password.value === "") {
        Swal.fire('Todos los datos son obligatorios')
      } else {
        Swal.fire({
          title: "Registro Exitoso",
          showCancelButton: false,
          confirmButtonColor: 'grey',
          confirmButtonText: 'OK'
        }).then((result) => {
          if (result.value) {
            window.close();
          }
        })
        
      }
}
