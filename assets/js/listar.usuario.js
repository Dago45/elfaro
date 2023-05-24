async function listarUsuario() {
    fetch("http://localhost/elfarophp/controllers/listar.usuario.php")
  .then((response) => {
    return response.text();
  })
  .then((html) => {
    document.getElementById("response").innerHTML = html;
     
  });
}