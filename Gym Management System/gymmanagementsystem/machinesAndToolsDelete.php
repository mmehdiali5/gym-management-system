<?php

include 'conn.php';

$id=$_GET['id'];

$q="DELETE FROM `machinesAndTools` WHERE  id=$id";

mysqli_query($con, $q);

header('location:machinesAndToolsDisplay.php');

?>