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

   <?php

    if (isset($_POST['submit'])) {
      $str = $_POST['search'];
      $sth = $conn->prepare("SELECT * FROM employee WHERE e_name = '$str'");

    }

   ?>

   <section class="all-employees">
    <div class="all-container">
      <h1 class="txtu">All employees</h1>

       <div class="search-bar">
      <form action="search.php" method="POST" class="searchForm">
        <!-- <label for=""><p>Search:</p></label> -->
        <input type="text" name="search" placeholder="name or department" onkeyup="isLeter(this)" class="search-input">
        <button type="submit" name="submit-search" value="by name" class="search-btn">Search</button>
      </form>
      </div><!--search-bar -->

      <div class="all-e-content">
   <?php 
   $conn = mysqli_connect("localhost", "root", "", "hresources");
    $sql = "SELECT e_id, e_name, e_f_lastname, e_contact, department, employment_status, rehirable  FROM employee";
    $query_result = mysqli_query($conn, $sql);
       while ($data = mysqli_fetch_array($query_result)) { ?>
        <div class="e-card">
          <img src="img/merce.jpg" alt="">
            <div class="e-card-info">
              <div class="e-card-name">
             <a href="#"><i class="far fa-id-card"><label for="">Name:</label></i><p><?php echo $data['e_name'] . " " . $data['e_f_lastname'] ?></p></a>
            </div><!--e-card-name-->
            <div class="e-card-email">
              <a href="#"><i class="fas fa-envelope"><label for="">Contact:</label></i><p><?php echo $data['e_contact'] ?></p></a>
             </div><!--e-card-email-->
             <div class="e-card-depto">
              <a href="#"><i class="far fa-id-card"><label for="">Department:</label></i><p><?php echo $data['department'] ?></p></a>
             </div><!--e-card-depto-->       
             <div class="e-card-status">
              <a href="#"><i class="far fa-id-card"><label for="">Status:</label></i><p><?php echo $data['employment_status'] ?></p></a>
             </div><!--e-card-status-->   
             <div class="e-card-rehirable">
              <a href="#"><i class="far fa-id-card"><label for="">Re-hirable:</label></i><p><?php echo $data['rehirable'] ?></p></a>
             </div><!--e-card-rehirable-->   



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
