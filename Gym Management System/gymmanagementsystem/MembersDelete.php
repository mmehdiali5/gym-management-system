<?php

include 'conn.php';

$MID=$_GET['MID'];

$q="DELETE FROM `members` WHERE  MID=$MID";

mysqli_query($con, $q);

header('location:MembersDisplay.php');

?>