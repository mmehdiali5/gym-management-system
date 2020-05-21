<?php

include 'conn.php';

$id=$_GET['id'];

$q="DELETE FROM `payment` WHERE  id=$id";

mysqli_query($con, $q);

header('location:paymentDisplay.php');

?>