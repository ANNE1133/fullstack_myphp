
<html>
<head><title>Form ฟอร์มการสั่งซื้อสินค้าจาก Shopping Mall </title>
</head> 
<?php 
$name=$_POST["name"];
$tel=$_POST["tel"];
$email=$_POST["email"];
$Computer=$_POST["Computer"];
$Notebook=$_POST["Notebook"];

print "คุณ $name <br> ";
print "เบอร์โทรติดต่อ $tel <br> ";
print "Email $email <br>";
print "สินค้ามี่คุณต้องการสั่ง <br>";
print "$Computer<br>";
print "$Notebook<br>";
?>
</body>
</html>
