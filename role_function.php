<?php

include("db.php");


// Calling all registers inside departments table 
$query = "SELECT roll FROM roles";
$sqlResult = mysqli_query($conn, $query);


?>
