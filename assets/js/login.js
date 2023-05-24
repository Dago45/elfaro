function abrirLogin() {
    let ventanaLogin = window.open(
      "login.php",
      "MiVentanaEmergente",
      "width=420,height=800"
    );
}

const correo = document.getElementById("correo");
const password = document.getElementById("password");

function guardarlogin() {
    if (correo.value === "" || password.value === "") {
        Swal.fire('Todos los datos son obligatorios')
      } else {
        Swal.fire({
          title: "Inicio de sesión exitoso",
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