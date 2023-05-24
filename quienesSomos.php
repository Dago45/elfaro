<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Periodico El Faro</title>
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
                    </ul>
                </div>
                <!-- End Right Element -->
            </div>
        </nav>
        
        <!-- Aquí comienza el encabezado de la pagina-->
        <header>
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
                        <img class="imgCarusel" src="https://picsum.photos/800/100?2" class="d-block w-10" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img class="imgCarusel"  src="https://picsum.photos/800/100?3" class="d-block w-10" alt="...">
                    </div>
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
                <div style="margin-left: 39%; margin-bottom: 5%;">
                    <h3 style="border: 1px solid black;">
                        Avisos y Anuncios
                    </h3>
                </div>
            </div>              
        </header> 

        <main>
           <div style="font-family: roboto;margin: 4%;" class="container">
            <h1 style="font-weight: bold;" >QUIÉNES SOMOS</h1>
            <p style="margin-top: 4%; font-size: 16px;text-align: justify;" >"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."</p>
           </div>
        </main>
                   

        <!-- Aquí comienza el pie de pagina de la web, el cual cuenta con lo mismo del header, pero mas pequeño-->
        <footer>
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
        
     

           
       
    <!--Este trozo de código nos permite identificar la pantalla según su categoria de noticias-->    
    <script type="text/javascript">
        listarNoticias("Inicio");
    </script>
    <script src="assets/js/contacto.js"></script>
    <!--Link para usar las propiedades de boostraps js-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</html>