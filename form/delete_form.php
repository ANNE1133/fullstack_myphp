<?php
/* get connection */ 
$code = $_POST['code'];
    $conn = mysqli_connect("localhost", "root", "", "mydb");
/* run Delete */ 

$stmt = mysqli_query($conn,"DELETE FROM customer WHERE  custno= '$code' ");

/* check for errors */ 
 if (!($stmt)) { 
    /* error */ 
    echo "Error"; }
 else {
    echo "Delete data = <Font color=red> '$code' </Font> is Successful.";
  }

/* close connection */ 
mysqli_close($conn)
?>
