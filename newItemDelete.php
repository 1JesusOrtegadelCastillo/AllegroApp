<?php

include("db.php");

if(isset($_GET['id'])){
    $id = $_GET['id'];

    $query = "DELETE 
              FROM departments 
              WHERE id_dpmt =" .$id;
} else {
    echo "No id set.";
}
$result = mysqli_query($conn, $query);

if($result){
    $_SESSION['success_message'] = "Department deleted successfully";
    header("Location: newItem_department.php");
} else {
    $_SESSION['error_message'] = "Department couldn't be deleted";
    header("Location: newItem_department.php");
}


?>