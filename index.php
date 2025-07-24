<!DOCTYPE html>
<html lang="en">
   <head>
   
      <!-- basic -->
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <!-- mobile metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="viewport" content="initial-scale=1, maximum-scale=1">
      <!-- site metas -->
      <title>GLOW PERFUMES</title>
      <meta name="keywords" content="">
      <meta name="description" content="">
      <meta name="author" content="">
      <!-- bootstrap css -->
      <link rel="stylesheet" href="css/bootstrap.min.css">
      <!-- style css -->
      <link rel="stylesheet" href="css/style.css">
      <!-- Responsive-->
      <link rel="stylesheet" href="css/responsive.css">
      <!-- fevicon -->
      <link rel="icon" href="images/fevicon.png" type="image/gif" />
      <!-- Scrollbar Custom CSS -->
      <link rel="stylesheet" href="css/jquery.mCustomScrollbar.min.css">
      <!-- Tweaks for older IEs-->
      <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
      <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
   </head>
   <!-- body -->
   <body class="main-layout">
         <button onclick="document.getElementById('musica').play()" style="position: fixed; bottom: 20px; left: 20px; z-index: 9999; background-color: #f1f1f1; border: none; border-radius: 50%; width: 50px; height: 50px; box-shadow: 0 2px 8px rgba(0,0,0,0.3); cursor: pointer;">
  <img src="images/musica1.png" alt="Play" style="width: 60%; height: 60%; margin-top: 5px;">
</button>
<audio id="musica" src="audio/santal.mp3" loop></audio>
      <!-- loader  -->
      <div class="loader_bg">
         <div class="loader"><img src="images/loading.gif" alt="#" /></div>
      </div>
      <!-- end loader -->
      <!-- header -->
      <header>
         <!-- header inner -->
         <div class="header">
            <div class="container-fluid">
               <div class="row">
                  <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col logo_section">
                     <div class="full">
                        <div class="center-desk">
                           <div class="logo">
                              <a href="index.php"><img src="images/logoajustado.png" alt="#" /></a>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="col-xl-9 col-lg-9 col-md-9 col-sm-9">
                     <nav class="navigation navbar navbar-expand-md navbar-dark ">
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample04" aria-controls="navbarsExample04" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarsExample04">
                           <ul class="navbar-nav mr-auto">
                              <li class="nav-item active">
                                 <a class="nav-link" href="index.php">INICIO</a>
                              </li>
                              <li class="nav-item">
                                 <a class="nav-link" href="about.html"> NEW PROVEDORES</a>
                              </li>
                              <li class="nav-item">
                                 <a class="nav-link" href="glasses.html">NUEVOS PRODUCTOS</a>
                              </li>
                              <li class="nav-item">
                                 <a class="nav-link" href="shop.html"></a>
                              </li>
                              <li class="nav-item">
                                 <a class="nav-link" href="contact.html"></a>
                              </li>
                              <li class="nav-item d_none login_btn">
                                 <a class="nav-link" href="#"></a>
                              </li>
                              <li class="nav-item d_none">
                                 <a class="nav-link" href="#"></a>
                              </li>
                              <li class="nav-item d_none sea_icon">
                                 <a class="nav-link" href="#"><i class="fa fa-shopping-bag" aria-hidden="true"></i><i class="fa fa-search" aria-hidden="true"></i></a>
                              </li>
                           </ul>
                        </div>
                     </nav>
                  </div>
               </div>
            </div>
         </div>
      </header>
      <!-- end header inner -->
      <!-- end header -->
      <!-- banner -->
      <section class="banner_main">
         <div id="banner1" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
               <li data-target="#banner1" data-slide-to="0" class="active"></li>
               <li data-target="#banner1" data-slide-to="1"></li>
               <li data-target="#banner1" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
               <div class="carousel-item active">
                  <div class="container">
                     <div class="carousel-caption">
                        <div class="text-bg">
                           <h1> <span class="blu">BIENVENIDOS <br></span>GLOW PERFUMES</h1>
                           <figure><img src="images/santal 33 ajustado.png" alt="#"/></figure>
                           <a class="read_more" href="#">INICIO</a>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="carousel-item">
                  <div class="container">
                     <div class="carousel-caption">
                        <div class="text-bg">
                           <h1> <span class="blu">FRESCURA Y BELLA  <br></span>GLOW PERFUMES</h1>
                           <figure><img src="images/VARSE AJUSTADO.png" alt="#"/></figure>
                           <a class="read_more" href="#">INICIO</a>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="carousel-item">
                  <div class="container">
                     <div class="carousel-caption">
                        <div class="text-bg">
                           <h1> <span class="blu">SOLO CON NOSOTROS <br></span>GLOW PERFUME</h1>
                           <figure><img src="images/SUAVEGE AJUSATDO.png" alt="#"/></figure>
                           <a class="read_more" href="#">INICIO</a>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <a class="carousel-control-prev" href="#banner1" role="button" data-slide="prev">
            <i class="fa fa-arrow-left" aria-hidden="true"></i>
            </a>
            <a class="carousel-control-next" href="#banner1" role="button" data-slide="next">
            <i class="fa fa-arrow-right" aria-hidden="true"></i>
            </a>
         </div>
      </section>
      <!-- end banner -->
      <!-- about section -->
      <div class="about">
         <div class="container">
            <div class="row d_flex">
               <div class="col-md-5">
                  <div class="about_img">
                     <figure><img src="images/nosotros.png" alt="#"/></figure>
                  </div>
               </div>
               <div class="col-md-7">
                  <div class="titlepage">
                     <h2>NUESTROS PERFUMES </h2>
                     <p>“Con nuestros perfumes, la felicidad está a un spray de distancia. Con nosotros, puedes obtener en segundos tu fragancia favorita de las mejores marcas, o descubrir un nuevo aroma que te enamore. Solo con nosotros, el perfume que buscas está más cerca de lo que imaginas.”</p>
                  </div>
                  <a class="read_more" href="#">INICIO</a>
               </div>
            </div>
         </div>
      </div>
      <!-- about section -->
      <!-- Our  Glasses section -->
      <div class="glasses">
         <div class="container">
            <div class="row">
               <div class="col-md-10 offset-md-1">
                  <div class="titlepage">
                     <h2>GAMA ALTA</h2>
                     <p>QUE TU FELICIDAD NO AFECTE A TU ECONOMIA
                     </p>
                  </div>
               </div>
            </div>
         </div>
         <div class="container-fluid">
            <div class="row">
               <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
                  <div class="glasses_box">
                     <figure><img src="images/intenso.png" alt="#"/></figure>
                     <h3><span class="blu">$</span>1,329.05</h3>
                     <p>Dolce & Gabbana</p>
                  </div>
               </div>
               <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
                  <div class="glasses_box">
                     <figure><img src="images/badboy.png" alt="#"/></figure>
                     <h3><span class="blu">$</span>2,075.00</h3>
                     <p>Bad Boy Carolina Herrera</p>
                  </div>
               </div>
               <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
                  <div class="glasses_box">
                     <figure><img src="images/scandal.png" alt="#"/></figure>
                     <h3><span class="blu">$</span>3,500</h3>
                     <p>Jean Paul Gaultier Scandal</p>
                  </div>
               </div>
               <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
                  <div class="glasses_box">
                     <figure><img src="images/valentino.png" alt="#"/></figure>
                     <h3><span class="blu">$</span>3,000</h3>
                     <p>Valentino Uomo Born in Roma</p>
                  </div>
               </div>
               <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
                  <div class="glasses_box">
                     <figure><img src="images/valentinomujer.png" alt="#"/></figure>
                     <h3><span class="blu">$</span>4,800</h3>
                     <p>Valentino Donna Born in Roma</p>
                  </div>
               </div>
               <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
                  <div class="glasses_box">
                     <figure><img src="images/godgirl.png" alt="#"/></figure>
                     <h3><span class="blu">$</span>4,550</h3>
                     <p>Carolina Herrera Good Girl</p>
                  </div>
               </div>
               <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
                  <div class="glasses_box">
                     <figure><img src="images/pradamu.png" alt="#"/></figure>
                     <h3><span class="blu">$</span>3,550</h3>
                     <p>Prada Paradoxe</p>
                  </div>
               </div>
               <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
                  <div class="glasses_box">
                     <figure><img src="images/misdior.png" alt="#"/></figure>
                     <h3><span class="blu">$</span>8,500</h3>
                     <p>Miss Dior Eau de Parfum</p>
                  </div>
               </div>
               <div class="col-md-12">
                  <a class="read_more" href="#">INICIO</a>
               </div>
            </div>
         </div>
      </div>
      <!-- end Our  Glasses section -->
      <!-- Our shop section -->
      <div id="about" class="shop">
         <div class="container-fluid">
            <div class="row">
               <div class="col-md-5">
                  <div  class="shop_img">
                     <figure><img src="images/provedor1.png" alt="#"/></figure>
                  </div>
               </div>
               <div class="col-md-7 padding_right0">
                  <div class="max_width">
                     <div class="titlepage">
                        <h2>Nuestros Proveedores de Alta Gama </h2>
                        <p>“Los proveedores con los que trabajamos no temen al éxito, cumpliendo con las expectativas de nuestros clientes tanto en la línea de perfumes para dama como en la de caballero. Además, son reconocidos a nivel internacional por su calidad y prestigio.”</p>
                        <a class="read_more" href="#">INICIO</a>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- end Our shop section -->
      <!-- clients section -->
      <div class="clients">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <div class="titlepage">
                     <h2>  Solo Marcas Reconocidad con Nosotros en todo el planeta</h2>
                     <p>nuestros perfumes no requieren recomendaciones ya que todos estan en gama alta en CUALQUIER TIENFDA CONOCIDAD </p>
                  </div>
               </div>
            </div>
            <div class="row">
               <div class="col-md-12">
                  <div id="myCarousel" class="carousel slide clients_Carousel " data-ride="carousel">
                     <ol class="carousel-indicators">
                        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                        <li data-target="#myCarousel" data-slide-to="1"></li>
                        <li data-target="#myCarousel" data-slide-to="2"></li>
                     </ol>
                     <div class="carousel-inner">
                        <div class="carousel-item active">
                           <div class="container">
                              <div class="carousel-caption ">
                                 <div class="row">
                                    <div class="col-md-12">
                                       <div class="clients_box">
                                          <figure><img src="images/godgirl.png" alt="#"/></figure>
                                          <h3>GENEROS</h3>
                                          <p>Todo genero tiene importancia en nuestra tienda tanto el de hombre como el de mujer 
                                             solo tu eres el intermediado entre la moda y nosotros  </p>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="carousel-item">
                           <div class="container">
                              <div class="carousel-caption">
                                 <div class="row">
                                    <div class="col-md-12">
                                       <div class="clients_box">
                                          <figure><img src="images/angel.png" alt="#"/></figure>
                                          <h3>ORIGINALIDAD</h3>
                                          <p>nuestros perfumes son 1005 originales de las marcas mas reconocidad en el plente la 

                                          </p>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="carousel-item">
                           <div class="container">
                              <div class="carousel-caption">
                                 <div class="row">
                                    <div class="col-md-12">
                                       <div class="clients_box">
                                          <figure><img src="images/santal 33 ajustado.png" alt="#"/></figure>
                                          <h3>Ofrecemos</h3>
                                          <p>CALIDAD EN NUESTROS PRODUCTOS </p>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
                     <i class='fa fa-angle-left'></i>
                     </a>
                     <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
                     <i class='fa fa-angle-right'></i>
                     </a>
                  </div>
               </div>
            </div>
         </div>
      </div>
     
      <!-- Comenzamos la codificacion de el formulario PHP y establcer la INSERTAR -->
      <form action="php/registroPerfumes.php" method="POST" id="formRegistroPerfume" class="main_form">
  <div class="row">
    <div class="col-md-12">
      <h3>Registrar nuevo perfume</h3>
    </div>
    <div class="col-md-12">
      <input class="contactus" type="text" name="nombre" placeholder="Nombre del perfume" required>
    </div>
    <div class="col-md-12">
      <input class="contactus" type="text" name="marca" placeholder="Marca" required>
    </div>
    <div class="col-md-12">
      <input class="contactus" type="number" name="ml" placeholder="Mililitros" required>
    </div>
    <div class="col-md-12">
      <input class="contactus" type="number" step="0.01" name="precio" placeholder="Precio" required>
    </div>
    <div class="col-md-12">
      <button type="submit" name="btnregistrar" class="send_btn">Registrar Perfume</button>
    </div>
  </div>
</form>

         <div class="container-fluid">
            <div class="map_section">
               <div id="map">
               </div>
            </div>
         </div>
      </div>
      </div>
      <!-- end contact section -->
      <!--  footer -->
      <footer>
         <div class="footer">
            <div class="container">
               <div class="row">
                  <div class="col-md-8 offset-md-2">
                     <ul class="location_icon">
                        <li><a href="#"><i class="fa fa-map-marker" aria-hidden="true"></i></a><br>Acuclo</li>
                        <li><a href="#"><i class="fa fa-phone" aria-hidden="true"></i></a><br> 7124031271</li>
                        <li><a href="#"><i class="fa fa-envelope" aria-hidden="true"></i></a><br> Glow perfumes@gmail.com</li>
                     </ul>
                  </div>
               </div>
            </div>
            <div class="copyright">
               <div class="container">
                  <div class="row">
                     <div class="col-md-12">
                        <p>Creado JAIR ALCANTARA HERNANDEZ<a href="https://html.design/"> 17/07/2025</a></p>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </footer>
      <!-- end footer -->
      <!-- Javascript files-->
      <script src="js/jquery.min.js"></script>
      <script src="js/popper.min.js"></script>
      <script src="js/bootstrap.bundle.min.js"></script>
      <script src="js/jquery-3.0.0.min.js"></script>
      <!-- sidebar -->
      <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
      <script src="js/custom.js"></script>
      <script>
         // This example adds a marker to indicate the position of Bondi Beach in Sydney,
         // Australia.
         function initMap() {
           var map = new google.maps.Map(document.getElementById('map'), {
             zoom: 11,
             center: {lat: 20.085769, lng:  -99.864546},
             });
         
         var image = 'images/maps-and-flags.png';
         var beachMarker = new google.maps.Marker({
             position: {lat: 40.645037, lng: -73.880224},
             map: map,
             icon: image
           });
         }
      </script>
      <!-- google map js -->
      <script src="https://maps.app.goo.gl/iSkUzBrwR9x732Rc7"></script>
      <!-- end google map js --> 
   </body>
</html>

