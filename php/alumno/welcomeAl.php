<?php
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: ../../index.php");
    exit;
}
?>
 
<!DOCTYPE html>
<html lang="esp">
<head>

    <title>Evaluación en línea</title>

    <!--link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css"-->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <link rel="stylesheet" href="../../css/bootstrap.min.css">
    <link rel="stylesheet" href="../../css/magnific-popup.css">
    <link rel="stylesheet" href="../../css/font-awesome.min.css">

     <!-- MAIN CSS -->
    <link rel="stylesheet" href="../../css/templatemo-style.css">
    <!--style type="text/css">
        body{ font: 14px sans-serif; text-align: center; }
    </style-->
</head>
<body>
    <!--aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa-->
    <!-- PRE LOADER -->
     <section class="preloader">
          <div class="spinner">
               <span class="spinner-rotate"></span>
          </div>
     </section>


     <!-- MENU -->
     <section class="navbar custom-navbar navbar-fixed-top" role="navigation">
          <div class="container">

               <div class="navbar-header">  
                  <!-- lOGO TEXT HERE -->
                    <a href="#" class="navbar-brand"><b><?php echo htmlspecialchars($_SESSION["username"]); ?></b></a>
               </div>

               <!-- MENU LINKS -->
               <div class="collapse navbar-collapse">
                   <ul class="nav navbar-nav navbar-right">
                         <li class="section-btn"><a href="../logout.php">Cerrar sesión</a></li>
                    </ul>
               </div>

          </div>
     </section>


     <!-- BLOG HEADER -->
     <section id="blog-head" data-stellar-background-ratio="0.5">
          <div class="overlay"></div>
          <div class="container">
               <div class="row">
               </div>
          </div>
     </section>

     <!-----------------------------------------CONTENIDO-------------------------------------------------------------->
        <!-- BLOG -->
     <section id="blog" data-stellar-background-ratio="0.5">
          <div class="container">
               <div class="row">

                    <div class="col-md-12 col-sm-12">
                         <div class="section-title">
                              <h2>Selecciona una unidad</h2>
                              <span class="line-bar">...</span>
                         </div>
                    </div>

                    <div class="col-md-8 col-sm-8">
                         <!-- BLOG THUMB -->
                         <div class="media blog-thumb">
                              <div class="media-object media-left">
                                   <a href="#"><img src="../../images/induc.png" class="img-responsive" alt=""></a>
                              </div>
                              <div class="media-body blog-info">
                                   <h2><a href="#">Unidad 1</a></h2>
                                   <h3>Inducción matemática</h3>
                                   <h5><a href="#" >Introducción</a></h5>
                                   <h5><a href="#" >Principio de la inducción matemática</a></h5>
                                   <h5><a href="#" >Sumas y productos</a></h5>
                                   <h5><a href="#" >Teoría del binomio</a></h5>
                              </div>
                         </div>
                    </div>

                    <div class="col-md-8 col-sm-8">
                         <!-- BLOG THUMB -->
                         <div class="media blog-thumb">
                              <div class="media-object media-left">
                                   <a href="#"><img src="../../images/sistemas.png" class="img-responsive" alt=""></a>
                              </div>
                              <div class="media-body blog-info">
                                   <h2><a href="#">Unidad 2</a></h2>
                                   <h3><a href="#">Sistema de ecuaciones lineales y el método de eliminación Gauss-Jordan</a></h3>
                                   <h5><a href="#" >Método de Gauss</a></h5>
                                   <h5><a href="#" >Suma, producto por escalar y producto de matrices</a></h5>
                                   <h5><a href="#" >Cálculo de la matriz inversa y la regla de Cramer</a></h5>
                              </div>
                         </div>
                    </div>

                    <div class="col-md-8 col-sm-8">
                         <!-- BLOG THUMB -->
                         <div class="media blog-thumb">
                              <div class="media-object media-left">
                                   <a href="#"><img src="../../images/complejo.png" class="img-responsive" alt=""></a>
                              </div>
                              <div class="media-body blog-info">
                                   <h2><a href="#">Unidad 3</a></h2>
                                   <h3>Números complejos</h3>
                                   <h5><a href="#" >Representación geométrica</a></h5>
                                   <h5><a href="#" >Los números complejos como un campo</a></h5>
                                   <h5><a href="#" >Raíces y teorema de Moivre</a></h5>
                                   <h5><a href="#" >Regiones en el plano complejo</a></h5>
                              </div>
                         </div>
                    </div>

                    <div class="col-md-8 col-sm-8">
                         <!-- BLOG THUMB -->
                         <div class="media blog-thumb">
                              <div class="media-object media-left">
                                   <a href="#"><img src="../../images/lin.png" class="img-responsive" alt=""></a>
                              </div>
                              <div class="media-body blog-info">
                                   <h3><a href="#">Unidad 4</a></h3>
                                   <h4>Matrices y sistemas de ecuaciones lineales</h4>
                                   <h5><a href="#">Operaciones con los polinomios</a></h5>
                                   <h5><a href="#" >Algoritmo de la división</a></h5>
                                   <h5><a href="#" >Máximo común divisor</a></h5>
                                   <h5><a href="#" >Raíces de los polinomios</a></h5>
                                   <h5><a href="#" >División sintética</a></h5>
                                   <h5><a href="#" >Teorema fundamental</a></h5>
                              </div>
                         </div>
                    </div>          
               </div>
          </div>
     </section>

     <!------------------------------------------------------------------------------------------------------------------>

         <!-- FOOTER -->
     <footer data-stellar-background-ratio="0.5">
          <div class="container">
               <div class="row">
                   <div class="copyright-text" align="center"> 
                         <p> &copy; FCC</p>
                   </div>
               </div>
          </div>
     </footer>

    <!-- SCRIPTS -->
     <script src="../../js/jquery.js"></script>
     <script src="../../js/bootstrap.min.js"></script>
     <script src="../../js/jquery.stellar.min.js"></script>
     <script src="../../js/jquery.magnific-popup.min.js"></script>
     <script src="../../js/smoothscroll.js"></script>
     <script src="../../js/custom.js"></script>
</body>
</html>