<?php

include("db.php");


if(isset($_POST['newItem']))
{
    $addRole = $_POST['newRole'];

    if($addRole == ""){
        echo "Insert new Role name";
    } else {
        $query = "INSERT INTO roles(roll) 
        VALUES
        (
            '$addRole'
        )";

        $result = mysqli_query($conn, $query);

        // redirecting user to index.php once he sended the info
        header("Location:newRole.php");    
    }
}


?>