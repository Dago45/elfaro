<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Periodico El Faro</title>
        <!-- Link que hace la referencia y la union del css al html -->   
        <link href="assets/css/comentario.css" rel="stylesheet" type="text/css">
        <!-- Link que nos permite usar la fuente externa de google font-->
        <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
        <script src="https://kit.fontawesome.com/85c43dc871.js" crossorigin="anonymous"></script>
     
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
         <script src="https://kit.fontawesome.com/eb496ab1a0.js" crossorigin="anonymous"></script>
    </head>
    
    <body>
        <main>
            <!-- Aquí comienza el encabezado de la pagina-->
            <header>
                <div>            
                    <a href="index.php">          
                        <img id="logo-el-faro" src="assets/src/logo-el-faro.svg" alt="">
                    </a> 
                </div>                          
            </header>
            <body>
                <a href="controllers/listar.usuario.php"
                style= "border: 2px black solid; margin-left:40%; text-decoration: none; 
                        color: black; font-size: 24px; border-radius: 6px;  padding: 2px;"
                >Ver usuarios registrados</a>
            </body>
           
        </main>
    </body>

    <footer style="margin-top: 14%;">
        <section class="footerStyle">
            <div class="imagenFooter">
                <a href="index.php">
                    <img style="width: 500px; height: 200px; margin-top: 20px;" id="logo-el-faro" src="assets/src/logo-el-faro.svg" alt="">
                </a>
            </div>
            <div class="listasFooter">
                <nav style="display: flex;width: 1000px;">
                    <ul class="menu-footer">
                        <li><a class="linkFooter" href="quienesSomos.php">Quénes somos</a></li>
                        <hr>
                        <li><a class="linkFooter" href="tarifasElectorales.php">Tarifas electorales</a></li>
                        <hr>
                        <li><a class="linkFooter" href="tarifasPublicidad.php">Tarifas publicidad</a></li>

                    </ul>
                    <ul class="menu-footer">
                        <li><a class="linkFooter" href="terminosCondiciones.php">Términos y condiciones</a></li>
                        <hr>
                        <li><a class="linkFooter" href="politicasPrivacidad.php">Políticas de privacidad</a></li>
                        <hr>
                        <li><a class="linkFooter" href="preguntasFrecuentes.php">Preguntas frecuentes</a></li>
                    </ul>
                </nav>
            </div>
        </section>
        <div style="display: flex;flex-direction: row; align-items: flex-end; background-color:#c9d2d0;height: fit-content;">
            <p style="margin-left: 0.3%; font-size:large; margin-top: 0.8%;">2023, El Faro. Todos los derechos reservados ®.</p>
            <div class="social">
                <i style="margin: 6px; margin-bottom: 20px; margin-left: 10px;" class="fa-brands fa-facebook fa-2xl"></i>
                <i style="margin: 6px; margin-bottom: 20px; margin-left: 10px;" class="fa-brands fa-twitter fa-2xl"></i>
                <i style="margin: 6px; margin-bottom: 20px; margin-left: 10px;" class="fa-brands fa-instagram fa-2xl"></i>
                <i style="margin: 6px; margin-bottom: 20px; margin-left: 10px;" class="fa-brands fa-telegram fa-2xl"></i>
            </div>
        </div>
    </footer>
    <script src="assets/js/comentario.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</html>
