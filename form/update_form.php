<?php
$a1 = $_POST['a1'];
$a2 = $_POST['a2'];
$a3 = $_POST['a3'];
$a4 = $_POST['a4'];
$a5 = $_POST['a5'];
/* get connection */ 
$conn = mysqli_connect("localhost", "root", "", "mydb");
/* run update */ 
$stmt = mysqli_query($conn,"UPDATE customer SET
		     custname = '$a2' ,sex ='$a3' ,address = '$a4' ,tel = '$a5' 
			WHERE  custno= '$a1' ");

/* check for errors */ 
 if (!$stmt) { 
    /* error */ 
    echo "Error"; }
 else {
    echo "Update data = <Font color=red> '$a1' </Font> is Successful.";
  }

/* close connection */ 
mysqli_close($conn);
?>
