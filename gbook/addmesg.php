<html>
<head><title>สมุดบันทึก </title></head>
<meta charset="UTF-8">
<body>
<?php
     $gname=$_POST["gname"];
     $gmesg=$_POST["gmesg"];
       $filename="gbooks.txt";
       $fp = fopen($filename,"a+"); //append 
       fputs($fp,"ข้อความ : $gmesg <br> \n");
       fputs($fp,"ชื่อ: $gname<br> \n");
       fclose($fp);
       $lines = file($filename);
       $last =sizeof($lines)-1;
       for ($i=$last;$i>=0;$i--)
           {
                $ptext = $lines[$i];
                echo $ptext ,"<br>";
                if ($i % 2 == 1) { echo "<hr>";};
           }
?>
</body>
</html>
