<?php

include 'conn.php';

$gymID=$_GET['gymID'];

$q="DELETE FROM `gym` WHERE  gymID=$gymID";

mysqli_query($con, $q);

header('location:gymDisplay.php');

?>