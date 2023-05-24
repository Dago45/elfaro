 /*Funcion para mantener la hora online en el sitio web */
 function actualizarFechaHora() {
  let fechaHora = new Date();
  let diaSemana = fechaHora.toLocaleDateString("es-ES", { weekday: "long" });
  let dia = fechaHora.getDate();
  let mes = fechaHora.toLocaleDateString("es-ES", { month: "long" });
  let anio = fechaHora.getFullYear();
  let hora = fechaHora.getHours();
  let minutos = fechaHora.getMinutes();
  let segundos = fechaHora.getSeconds();
  let meridiano = hora >= 12 ? "" : "";
  let fechaHoraTexto = `${diaSemana}, ${dia} de ${mes} de ${anio} ${hora}:${minutos}:${segundos} ${meridiano}`;
  document.getElementById("fecha-hora").textContent = fechaHoraTexto;
}
setInterval(actualizarFechaHora, 1000);

let noticias = [];

// funcion para abrir una ventana emergente para añadir nueva noticia
function abrirVentana() {
  let ventanaEmergente = window.open(
    "subirArticulo.php",
    "MiVentanaEmergente",
    "width=420,height=800"
  );
}

function abrirLogin() {
  let ventanaNueva = window.open(
    "login.php",
    "MiVentanaEmergente",
    "width=420,height=800"
  );
}

function listarNoticias(categoria) {
  let div_noticias = document.getElementById("noticias");
  
  const data_noticias = window.localStorage.getItem("noticias");
  if (data_noticias) {
    noticias = JSON.parse(data_noticias);
  }
  
  const lastDate =  noticias.map(function(item){return item.fecha}).reduce(function (a, b) { return a > b ? a : b; });
  noticias.filter((value)=> value.categoria === categoria).sort((a,b) => Date.parse(b.fecha) - Date.parse(a.fecha)).forEach((noticia) => {
    div_noticias.innerHTML += `<div class="noticia1 ${lastDate === noticia.fecha ? 'primicia' : ''}">
  <h2>${noticia.titulo}</h2>
  <img src=${noticia.img} alt="" class="foto">
  <h3>${noticia.descripcion}</h3> 
</div>`;
  });


  /* Contador para las clases noticia1 de cada articulo*/
const myCollection = document.getElementsByClassName("noticia1");
document.getElementById("contadorArt").innerHTML +="Esta sección cuenta con " + myCollection.length + " Articulos.";
}

