<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>El Faro Ensayo</title>
        <!-- Link que hace la referencia y la union del css al html -->   
        <link href="assets/css/style.css" rel="stylesheet" type="text/css">
        <!-- Link que nos permite usar la fuente externa de google font-->
        <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
        <script src="https://kit.fontawesome.com/85c43dc871.js" crossorigin="anonymous"></script>
        <script src="assets/js/funciones.js"></script>
        <!--Link para usar las propiedades de boostrap con css-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    </head>
    
    <body>
    <nav class="navbar navbar-expand-lg sticky-top bg-dark navbar-dark p-4 fs-2">
        <div class="container-fluid">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <!-- Left Element -->
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <button class="nav-link text-white fs-2" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasWithBothOptions" aria-controls="offcanvasWithBothOptions">
                            <span class="navbar-toggler-icon d-none d-sm-block"></span>
                            <span class="d-block d-sm-none">MENÚ</span>
                        </button>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link fs-2" style="text-decoration: none;color: white;" href="index.php"> INICIO </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link fs-2" style="text-decoration: none;color: white;" href="deporte.php"> DEPORTES </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link fs-2" style="text-decoration: none;color: white;" href="negocios.php"> NEGOCIOS </a>
                    </li>
                </ul>
            </div>
            <!-- End Left Element -->
            <!-- Center Element -->
            <div class="collapse navbar-collapse d-none d-sm-block">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0 m-auto ">
                    <div class="nav-item" id="fecha-hora"></div>
                </ul>
            </div>
            <!-- End Center Element -->
            <!-- Right Element -->
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <form class="d-flex" role="search">
                        <input class="form-control me-2 form-control-lg fs-2" type="search" placeholder="Buscar" aria-label="Search">
                        <button class="btn btn-outline-success btn-lg fs-2" type="submit">Buscar</button>
                    </form>
                    <button id="registrarse" class="btn btn-outline-warning btn-lg fs-2 ms-3 d-none d-sm-block" onclick="abrirRegistro()" type="button">Regístrese</button>
                    <button id="registrarse" class="btn btn-warning btn-lg fs-2 ms-3 d-none d-sm-block" onclick="abrirLogin()" type="button">Iniciar Sesión</button>
                </ul>
            </div>
            <!-- End Right Element -->
        </div>
    </nav>
        <!-- Aquí comienza el encabezado de la pagina-->
        <header>
            <div class="container-header">
                <div>
                    <a href="index.php">          
                        <img id="logo-el-faro" src="assets/src/logo-el-faro.svg" alt="">
                    </a> 
                </div>
                <div class="carusel">
                    <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
                        <div  class="carousel-inner ">
                        <div class="carousel-item active">
                            <a href="https://tienda.paula.cl/?utm_source=digital&amp;utm_medium=marketing&amp;utm_campaign=mama" target="_blank">
                                <img class="imgCarusel"  src="https://picsum.photos/800/100?1" class="d-block w-10" alt="...">
                            </a>
                        </div>
                        <div class="carousel-item">
                            <a href="https://tienda.paula.cl/?utm_source=digital&amp;utm_medium=marketing&amp;utm_campaign=mama" target="_blank">
                                <img class="imgCarusel"  src="https://picsum.photos/800/100?1" class="d-block w-10" alt="...">
                            </a>                    </div>
                        <div class="carousel-item">
                            <a href="https://tienda.paula.cl/?utm_source=digital&amp;utm_medium=marketing&amp;utm_campaign=mama" target="_blank">
                                <img class="imgCarusel"  src="https://picsum.photos/800/100?1" class="d-block w-10" alt="...">
                            </a>                    </div>
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                        </button>
                    </div>  
                    <div class="anuncios-txt">
                        <h3 style="border: 1px solid black;">
                            Avisos y Anuncios
                        </h3>
                    </div>
                </div> 
            </div>
            
            <!--Menú lateral-->
            <div class="offcanvas offcanvas-start" data-bs-scroll="true" tabindex="-1" id="offcanvasWithBothOptions" aria-labelledby="offcanvasWithBothOptionsLabel">
                <div style="display: flex; flex-direction: row; justify-content: space-between;">
                    <div>
                        <a href="index.php">
                            <img style="width: 340px; height: 80px; margin: 15px;" id="logo-el-faro" src="assets/src/logo-el-faro.svg" alt="">
                        </a>
                    </div>
                    <div>
                        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                    </div>
                </div>
                
                <div class="offcanvas-body">
                    <div class="accordion accordion-flush" id="accordionFlushExample">
                        <div class="accordion-item">
                          <h2 class="accordion-header">
                            <button style="font-size: 24px; bottom: 10%;" class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                              Secciones
                            </button>
                          </h2>
                          <div id="flush-collapseOne" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                            <ul style="justify-content: flex-start; list-style: none;">
                                <li style="display: list-item; text-align: start;"><a style="font-size: 15px; text-decoration: none;color: var(--color-black);" href="index.php"> INICIO </a></li>
                                <li style="display: list-item; text-align: start;"><a style="font-size: 15px; text-decoration: none;color: var(--color-black);" href="deporte.php"> DEPORTES </a></li>
                                <li style="display: list-item; text-align: start;"><a style="font-size: 15px; text-decoration: none;color: var(--color-black);" href="negocios.php"> NEGOCIOS </a></li>                                
                            </ul>
                          </div>
                        </div>
                    </div>
                    <hr>
                    <!-- En este item se abrira la ventana emergente para cargar las noticias dinámicas-->
                    <div style="display: flex;flex-direction: row; justify-content:start;margin-left: 8px;">
                        <a style="font-size: 24px; text-decoration: none; color: var(--color-black);" onunload="abrirComentario()" href="comentario.php" target="_blank">Tus comentarios aquí</a>
                        </div>
                    <hr>
                    <div style="display: flex;flex-direction: row; justify-content:start;margin-left: 8px;">
                    <a style="font-size: 24px; text-decoration: none; color: var(--color-black);" onclick="abrirComentario()" class="dropdown-item" href="viewuser.php" target="_blank" >Administrar usuarios(SOLO ADMIN)</a>
                    </div>
                    <hr>
                    <div style="display: flex;flex-direction: row; justify-content:start;margin-left: 8px;">
                        <a style="font-size: 24px; text-decoration: none; color: var(--color-black);" onclick="abrirVentana()" href="#" target="_blank">Ingresar artículos(SOLO ADMIN)</a>
                    </div>
                    <hr>
                    <div>
                        <p style="font-size: 24px; text-align: start; margin-left: 10px;">Visita nuestras Redes Sociales</p>
                        <div class="social">
                            <i style="margin: 7px;" class="fa-brands fa-facebook fa-2xl"></i>
                            <i style="margin: 7px;" class="fa-brands fa-twitter fa-2xl"></i>
                            <i style="margin: 7px;" class="fa-brands fa-instagram fa-2xl"></i>
                            <i style="margin: 7px;" class="fa-brands fa-telegram fa-2xl"></i>
                        </div>
                    </div>
                    <hr>
                </div>
            </div>            
        </header> 

        <main>
            <!-- Comienzo del cuerpo de las noticias-->
            <div class="d-flex flex-column aling-content-centern">
                <button id="registrarse" class="btn btn-outline-warning btn-lg fs-2 ms-3 d-block d-sm-none mx-auto" onclick="abrirRegistro()" type="button">Regístrese</button>          
                <button id="registrarse" class="btn btn-warning btn-lg fs-2 ms-3 d-block d-sm-none" onclick="abrirRegistro()" type="button">Iniciar Sesión</button>
            </div>  
           <!-- Se crea la clase bloque, para poder crear el bloque de noticias-->
            <div class="bloque">
                <!--En este Div se insertaran las noticias de forma dinamica, mediante un formulario de ingreso de estas-->
                <div class="bloque" id="noticias"></div>
                <div class="noticia1">
                    <h2 >Policial | Trágico desenlace: Muere trabajador de minimarket que fue baleado en la cabeza en Santiago centro</h2>
                    <img class="foto" alt="" src="https://www.latercera.com/resizer/8RTGF-m6uQKFujLf_CEK6sN9rsg=/1023x682/smart/cloudfront-us-east-1.images.arcpublishing.com/copesa/2WDSKEYH6FGD5PJKKVCJW3SL34.jpg">         
                </div>   

                <div class="noticia1">
                    <h2> Internacional | Xi Jinping llega a Rusia y asegura que protegerán el Nuevo Orden Mundial</h2>
                    <!-- Probamos anclando un video de youtube con el siguiente link-->
                    <iframe class="video"src="https://www.youtube.com/embed/cPLREG-WJRk" title="YouTube video player" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                </div>     

                <div class="noticia1">
                    <h2>Internacional | Las graves violaciones de los derechos humanos en el conflicto de Ucrania se han convertido en “una rutina escandalosa”</h2>
                    <!-- Aquí insertamos un audio con los comandos controls; para el manejo de este. Se consideran 2 formatos de audios para diferentes navegadores.-->
                    <audio controls class="audio">
                        <source src="assets/src/noticiamp3.mp3" type="audio/mp3">
                        <source src="assets/src/noticiamp3.mp3" type="audio/ogg">
                        Your browser does not support the audio element.
                    </audio>
                </div>

                
            </div>
            <hr>
            <!-- En este tag el usuario podrá ver el conteo de noticias que tiene la pantalla.-->
            <p id="contadorArt"></p>
        </main>
                   

        <!-- Aquí comienza el pie de pagina de la web, el cual cuenta con lo mismo del header, pero mas pequeño-->
        <footer>
            <section class="footerStyle">
                <div class="imagenFooter">
                    <a href="index.php">
                        <img class="logo-footer" id="logo-el-faro" src="assets/src/logo-el-faro.svg" alt="">
                    </a>
                </div>
                <div class="listasFooter">
                    <nav class="links">
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
        
     

           
       
    <!--Este trozo de código nos permite identificar la pantalla según su categoria de noticias-->    
    <script type="text/javascript">
        listarNoticias("Inicio");
    </script>
    <!--Link para usar las propiedades de boostraps js-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    <script src="assets/js/guardarRegistro.js"></script>
    <script src="assets/js/login.js"></script>
    </html>