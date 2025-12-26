<?php

    ini_set('display_errors', 1);
    error_reporting(E_ALL);
    $conn = mysqli_connect("localhost", "root", "", "mydb");
    if (!$conn) {
        die("เชื่อมต่อไม่ได้");
    }
    $begin = $_POST['begin'];
    $end = $_POST['end'];
// SQL
$sql = "
SELECT CustNo, CustName, Sex, Address, Tel
FROM Customer
WHERE CustNo BETWEEN '$begin' AND '$end'
ORDER BY CustNo
";

$cur = mysqli_query($conn, $sql);
if (!$cur) {
    die("SQL error");
}

// ดึงข้อมูล
while ($row = mysqli_fetch_row($cur)) {

    $name1 = $row[0];
    $name2 = $row[1];
    $name3 = $row[2];
    $name4 = $row[3];
    $name5 = $row[4];
  echo "<FONT color=blue>&nbsp&nbsp&nbsp&nbsp  custno:&nbsp&nbsp&nbsp&nbsp</FONT>$name1,
        <FONT color=red>&nbsp&nbsp&nbsp&nbsp   custname:&nbsp&nbsp&nbsp&nbsp</FONT>$name2,
	<FONT color=green>&nbsp&nbsp&nbsp&nbsp sex:&nbsp&nbsp&nbsp&nbsp</FONT>$name3,
	<FONT color=yellow>&nbsp&nbsp&nbsp&nbsp addr:&nbsp&nbsp&nbsp&nbsp</FONT>$name4,
	<FONT color=cyan>&nbsp&nbsp&nbsp&nbsp  tel:</FONT>$name5&nbsp&nbsp&nbsp&nbsp<BR>"; 
}
mysqli_close($conn);
?>
