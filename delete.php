<?php

include 'conn.php';

// extracting the user data using get method 
extract($_GET);

// making query for deleting data in mysql
$query = "DELETE FROM user WHERE id='$id'";

// run query 
mysqli_query($conn,$query);

header('location:display.php');
// this header will redirect back to display.php page
?>
