<?php include("header.php");?>

<div class="search-bar">
      <form action="search.php" method="POST" class="searchForm">
        <!-- <label for=""><p>Search:</p></label> -->
        <input type="text" name="search" placeholder="name or department" onkeyup="isLeter(this)" class="search-input">
        <button type="submit" name="submit-search" value="by name" class="search-btn">Search</button>
      </form>
      </div><!--search-bar -->

<div class="all-container">
      <div class="all-e-content">

<?php

   $conn = mysqli_connect("localhost", "root", "", "hresources");
    if(isset($_POST['submit-search'])) 
    {
        $search = mysqli_real_escape_string($conn, $_POST['search']);
        $sql = "SELECT e_id, e_name, e_f_lastname, e_contact, department, employment_status, rehirable FROM employee WHERE e_name LIKE '%$search%' OR department LIKE '%$search%' ";
        $result = mysqli_query($conn, $sql);
        $query_result = mysqli_num_rows($result);

        //echo "<p>There are " . $query_result . " results. </p>";

        if($query_result > 0){
            while($row = mysqli_fetch_assoc($result))
            { ?>
            <div class="e-card">
             <img src="img/merce.jpg" alt="">
            <div class="e-card-info">
              <div class="e-card-name">
                 <a href="#"><i class="far fa-id-card"><label for="">Name:</label></i><p><?php echo $row['e_name'] . " " . $row['e_f_lastname'] ?></p></a>
              </div><!--e-card-name-->
                <div class="e-card-email">
                    <a href="#"><i class="fas fa-envelope"><label for="">Contact:</label></i><p><?php echo $row['e_contact'] ?></p></a>
                </div><!--e-card-email-->
                    <div class="e-card-depto">
                    <a href="#"><i class="far fa-id-card"><label for="">Department:</label></i><p><?php echo $row['department'] ?></p></a>
                    </div><!--e-card-depto-->       
                        <div class="e-card-status">
                        <a href="#"><i class="far fa-id-card"><label for="">Status:</label></i><p><?php echo $row['employment_status'] ?></p></a>
                        </div><!--e-card-status-->   
                            <div class="e-card-rehirable">
                            <a href="#"><i class="far fa-id-card"><label for="">Re-hirable:</label></i><p><?php echo $row['rehirable'] ?></p></a>
                            </div><!--e-card-rehirable-->   

             <div class="e-card-actions">
               <a href="employee_all_info.php?id=<?php echo $row['e_id'] ?>"><input type="submit" value="Full view" name="fullView"></a>
             </div><!--e-card-actions-->
            
            </div><!--e-card-info-->
        </div><!--e-card -->

          <?php  } // <- while closing
        } else {
            echo "There are no results matching your search";
        } // <- else closing
    }



?>

</div><!-- all-e-content -->
    </div><!--all-container-->

    <?php include('footer.php'); ?>