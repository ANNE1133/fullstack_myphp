<html>
<head>
    <title> COUNTER</title>
    <meta charset="UTF-8">
</head> 
    <body>
    <?PHP
        ini_set('display_errors', 1);
        error_reporting(E_ALL);

        $fs = fopen("counter.inc","r");
        $count = fgets($fs,255);
        fclose($fs);
        $count++;
        $co=strval($count);
        for ($i=0; $i<strlen($co); $i++){
            echo '<img src="images.png" width="40">';
            if(((strlen($co)-$i)==7)||((strlen($co)-$i)==4)){
                echo '<img src="comma.png" width="20">';		
            }
        }
        echo "<H1> $count </H1>";
        $fs = fopen("counter.inc","w");
        fputs($fs,$count);
        fclose($fs);
    ?>
    </body>
</html>
