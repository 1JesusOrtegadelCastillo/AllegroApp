<?php include("db.php") ?>

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
      <h1 class="txtu">Human Resources</h1>
      <div class="search-bar">
      <label for=""><p>Search:</p></label><input type="text" placeholder="By name">
      </div><!--search-bar -->
      <div class="all-e-content">
   <?php 
   $conn = mysqli_connect("localhost", "root", "", "hresources");
   $sql = "SELECT e_id, e_name, e_f_lastname, e_email, department FROM employee WHERE department = 'HR' ";
    $query_result = mysqli_query($conn, $sql);
       while ($data = mysqli_fetch_array($query_result)) { ?>
        <div class="e-card">
          <img src="img/merce.jpg" alt="">
            <div class="e-card-info">
            <div class="e-card-id">
             <a href="#"><i class="far fa-id-card"><label for="">ID:</label></i><p><?php echo $data['e_id'] ?></p></a>
            </div><!--e-card-id-->
              <div class="e-card-name">
             <a href="#"><i class="far fa-id-card"><label for="">Name:</label></i><p><?php echo $data['e_name'] . " " . $data['e_f_lastname'] ?></p></a>
            </div><!--e-card-name-->
            <div class="e-card-email">
              <a href="#"><i class="fas fa-envelope"><label for="">E-mail:</label></i><p><?php echo $data['e_email'] ?></p></a>
             </div><!--e-card-email-->
             <div class="e-card-depto">
              <a href="#"><i class="far fa-id-card"><label for="">Department:</label></i><p><?php echo $data['department'] ?></p></a>
             </div><!--e-card-depto-->          
             <div class="e-card-actions">
               <a href="employee_all_info.php?id=<?php echo $data['e_id'] ?>"><input type="submit" value="Full view" name="fullView"></a>
              
             </div><!--e-card-actions-->
            
            </div><!--e-card-info-->
        </div><!--e-card -->
        <?php } ?>       
      </div><!-- all-e-content -->
    </div><!--all-container-->
  </section>



  <!--[if IE]>
    <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
  <![endif]-->

 <?php @include('footer.php'); ?>

</html>
