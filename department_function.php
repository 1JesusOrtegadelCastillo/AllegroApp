<?php

include("db.php");


// Calling all registers inside departments table 
$sql = "SELECT department FROM departments";
$queryResult = mysqli_query($conn, $sql);

?>