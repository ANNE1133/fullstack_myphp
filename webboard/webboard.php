<html>
    <head>
        <title>สมุดบันทึก </title>
    </head>
    <body>
    <?php 	
        $message =$_POST['message'];
        $by = $_POST['by'];
        $fs =fopen("webboard.txt","a");
        fputs($fs ,"ข้อความ : $message <br>\n");
        fputs($fs ,"โพสต์โดย : $by <br>\n");
        fputs($fs, "วันเวลา : ".date("Y-M-d")." <hr>\n");
        fclose($fs);
    ?>
    <?php	
        $fs = fopen("webboard.txt","r");
        $e  =  fpassthru($fs);
        fclose($fs);
    ?>
    <FORM Action="webboard.php"  Method ="post">
            ข้อความ : <textarea rows ="4" cols="50" name = "message"></textarea><br>
            โพสต์โดย : <input type ="text" name = "by">
        <input type="submit" value = "โพสต์"><input type="reset" value = "ยกเลิก">
    </FORM>
    <hr>
    </body>
</html>
