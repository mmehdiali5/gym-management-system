<?php

include 'conn.php';

$id=$_GET['id'];

$q="DELETE FROM `job` WHERE  id=$id";

mysqli_query($con, $q);

header('location:jobDisplay.php');

?>