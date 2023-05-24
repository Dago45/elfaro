<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Iniciar Sesión</title>
        <!-- Link que nos permite usar la fuente externa de google font-->
        <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
        <script src="https://kit.fontawesome.com/85c43dc871.js" crossorigin="anonymous"></script>

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
            <form>
                <h4>Ingresa los datos para iniciar sesión</h4>
                <input class="control" type="email" name="correo" id="correo" placeholder="Ingrese su correo">
                <input class="control" type="password" name="password" id="password" placeholder="Ingrese su password">
            </form>
            <p> Revise los datos antes de presionar el botón iniciar sesión</p>
            <input type="submit" value="Iniciar Sesión" class="boton" onclick="guardarlogin()" >
            <i class="fa-brands fa-google fa-2xl " style="color: #ccced1; border: solid white 2px; border-radius: 16px; padding: 18px; margin-left: 40%"></i>
        </section>
    </body>
    <script src="assets/js/login.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

</html>