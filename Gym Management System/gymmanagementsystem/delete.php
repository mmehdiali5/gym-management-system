<?php

include 'conn.php';

$id=$_GET['id'];

$q="DELETE FROM `login_info` WHERE  id=$id";

mysqli_query($con, $q);

header('location:display.php');

?>