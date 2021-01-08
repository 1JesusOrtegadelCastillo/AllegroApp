<?php include("hrdb.php") ?>

<!doctype html>
<html class="no-js" lang="es">

<head>
  <meta charset="utf-8">
  <title>HR</title>
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="manifest" href="site.webmanifest">
  <link rel="apple-touch-icon" href="icon.png">
  <!-- Place favicon.ico in the root directory -->

  <link rel="stylesheet" href="css/all.css">
  <link rel="stylesheet" href="css/normalize.css">
  <link rel="stylesheet" href="css/main.css">
  <!-- Fonts -->
  <link href="https://fonts.googleapis.com/css2?family=Lato:wght@400;700&family=Roboto:wght@400;700&display=swap" rel="stylesheet">

  <meta name="theme-color" content="#fafafa">
</head>

<body>
   <?php include("header.php");?> 

  <section class="all-employees">
    <div class="all-container">
      <h1 class="txtu">Todos los empleados</h1>
      <div class="all-e-content">
        <div class="e-card">
          <img src="img/merce.jpg" alt="">
            <div class="e-card-info">
              <div class="e-card-name">
             <a href="#"><i class="far fa-id-card"><label for="">Nombre:</label></i><input type="text" name="e_nombre"><p></p></a>
            </div><!--e-card-name-->
            <div class="e-card-email">
              <a href="#"><i class="fas fa-envelope"><label for="">Correo:</label></i><input type="text" name="e_correo"><p></p></a>
             </div><!--e-card-email-->
             <div class="e-card-depto">
              <a href="#"><i class="far fa-id-card"><label for="">Departamento:</label></i><input type="text" name="e_depto"><p></p></a>
             </div><!--e-card-depto-->          
             <div class="e-card-actions">
               <a href="">Ver completo</a>
             </div><!--e-card-actions-->
            </div><!--e-card-info-->
        </div><!--e-card -->
        <div class="e-card">
          <img src="img/merce.jpg" alt="">
            <div class="e-card-info">
              <div class="e-card-name">
             <a href="#"><i class="far fa-id-card"><label for="">Nombre:</label></i><p>Jesus Osvaldo Ortega del Castillo </p></a>
            </div><!--e-card-name-->
            <div class="e-card-email">
              <a href="#"><i class="fas fa-envelope"><label for="">Correo:</label></i><p>Jesus.ortega@info.copm </p></a>
             </div><!--e-card-email-->
             <div class="e-card-Depto">
              <a href="#"><i class="far fa-id-card"><label for="">Departamento:</label></i><p>SISTEMAS/IT</p></a>
             </div><!--e-card-name-->         
             <div class="e-card-actions">
               <a href="">Ver completo</a>
             </div><!--e-card-actions-->
            </div><!--e-card-info-->
        </div><!--e-card -->
        <div class="e-card">
          <img src="img/merce.jpg" alt="">
            <div class="e-card-info">
              <div class="e-card-name">
             <a href="#"><i class="far fa-id-card"><label for="">Nombre:</label></i><p>Jesus Osvaldo Ortega del Castillo </p></a>
            </div><!--e-card-name-->
            <div class="e-card-email">
              <a href="#"><i class="fas fa-envelope"><label for="">Correo:</label></i><p>Jesus.ortega@info.copm </p></a>
             </div><!--e-card-email-->
             <div class="e-card-Depto">
              <a href="#"><i class="far fa-id-card"><label for="">Departamento:</label></i><p>SISTEMAS/IT</p></a>
             </div><!--e-card-name-->         
             <div class="e-card-actions">
               <a href="">Ver completo</a>
             </div><!--e-card-actions-->
            </div><!--e-card-info-->
        </div><!--e-card -->
         <div class="e-card">
          <img src="img/merce.jpg" alt="">
            <div class="e-card-info">
              <div class="e-card-name">
             <a href="#"><i class="far fa-id-card"><label for="">Nombre:</label></i><p>Jesus Osvaldo Ortega del Castillo </p></a>
            </div><!--e-card-name-->
            <div class="e-card-email">
              <a href="#"><i class="fas fa-envelope"><label for="">Correo:</label></i><p>Jesus.ortega@info.copm </p></a>
             </div><!--e-card-email-->
             <div class="e-card-Depto">
              <a href="#"><i class="far fa-id-card"><label for="">Departamento:</label></i><p>SISTEMAS/IT</p></a>
             </div><!--e-card-name-->         
             <div class="e-card-actions">
               <a href="">Ver completo</a>
             </div><!--e-card-actions-->
            </div><!--e-card-info-->
        </div><!--e-card -->
      </div><!-- all-e-content -->
    </div><!--all-container-->
  </section>



  <!--[if IE]>
    <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
  <![endif]-->

  <!-- Add your site or application content here -->
  <script src="js/vendor/modernizr-3.7.1.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
  <script>window.jQuery || document.write('<script src="js/vendor/jquery-3.4.1.min.js"><\/script>')</script>
  <script src="js/plugins.js"></script>
  <script src="js/main.js"></script>
  <script src="js/menu.js"></script>

  <!-- Google Analytics: change UA-XXXXX-Y to be your site's ID. -->
  <script>
    window.ga = function () { ga.q.push(arguments) }; ga.q = []; ga.l = +new Date;
    ga('create', 'UA-XXXXX-Y', 'auto'); ga('set','transport','beacon'); ga('send', 'pageview')
  </script>
  <script src="https://www.google-analytics.com/analytics.js" async></script>
</body>

</html>
