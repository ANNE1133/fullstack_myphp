<html>
<head>
  <title>Form ฟอร์มการสั่งซื้อสินค้าจาก Shopping Mall </title>
</head> 
  <body>
    <?PHP
      $filename="counter.txt";
      if (file_exists($filename))
        {
        $fp = fopen($filename,"r");
            $counter= fgets($fp,99);
            fclose($fp);
        } 
      else 
        {
          $counter=0; //integer now 
        }
      $fp = fopen($filename,"w");
      $counter += 1;
      fwrite($fp,$counter);
      fclose($fp);
      print "คุณเป็นคนที่  $counter";
    ?>
  </body>
</html>
