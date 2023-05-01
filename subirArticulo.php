<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Subir nuevo artículo</title>
        <!-- Link que nos permite usar la fuente externa de google font-->
        <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
        <script src="https://kit.fontawesome.com/85c43dc871.js" crossorigin="anonymous"></script>
        <script src="assets/js/subirArticulo.js" defer></script> 
                <!-- Link que hace la referencia y la union del css al html -->  
        <link href="assets/css/subirArticulo.css" rel="stylesheet" type="text/css">         
    </head>
    
    <body>
        <!-- Aquí comienza el encabezado de la pagina-->
        <header>
            <div>            
                <img id="logo-el-faro" src="assets/src/logo-el-faro.svg" alt="">
            </div>                          
        </header>
         <!-- formulario para subir nuevo articulo-->
        <section class="form-register">
            <h4>Ingresa los datos solicitados para cargar el nuevo artículo</h4>
            <input class="control" type="text" name="titulo" id="titulo" placeholder="Ingrese el encabezado del artículo">
            <textarea class="control" name="descripcion" id="descripcion" cols="10" rows="10" placeholder="Ingrese un resumen de la noticia"></textarea>
            <select  class="control" value="Inicio" id="categoria" >
                <option value="Inicio">Inicio</option>
                <option value="Deportes">Deportes</option>
                <option value="Negocio">Negocio</option>
            </select>
            <p> Revisa los datos y la falta de ortografía antes de cargar la noticia</p>
            <input class="boton" type="submit" value="Subir Noticia" onclick="agregarNoticia()">
        </section>
    </body>

</html>
