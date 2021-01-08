<?php

include("db.php");


if(isset($_POST['newItem']))
{
    $addDepartment = $_POST['newDepartment'];

    if($addDepartment == ""){
        echo "Insert new department name";
    } else {
        $query = "INSERT INTO departments(department) 
        VALUES
        (
            '$addDepartment'
        )";

        $result = mysqli_query($conn, $query);

        // redirecting user to index.php once he sended the info
        header("Location:newItem_department.php");    
    }
}


?>