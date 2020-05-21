<?php

include 'conn.php';

$id=$_GET['id'];

$q="DELETE FROM `invoice` WHERE  id=$id";

mysqli_query($con, $q);

header('location:invoiceDisplay.php');

?>