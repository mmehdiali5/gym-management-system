<?php

include 'conn.php';

$itemID=$_GET['itemID'];

$q="DELETE FROM `dietryitems` WHERE  itemID=$itemID";

mysqli_query($con, $q);

header('location:dietItemsDisplay.php');

?>