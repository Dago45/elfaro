const randomImg = "https://picsum.photos/seed/200/300";

function agregarNoticia() {
  let titulo = document.getElementById("titulo").value;
  let descripcion = document.getElementById("descripcion").value;
  let categoria = document.getElementById("categoria").value;
  console.log(titulo);
  console.log(descripcion);
  const noticia = {
    titulo,
    fecha: new Date(),
    img: randomImg,
    descripcion,
    categoria,
  };
  let noticias = JSON.parse(window.localStorage.getItem("noticias")) || [];
  noticias = [...noticias, noticia];
  window.localStorage.setItem("noticias", JSON.stringify(noticias));
  window.close();
}

window.onunload = cerrarVista;

function cerrarVista() {
  window.opener.location.reload();
}

