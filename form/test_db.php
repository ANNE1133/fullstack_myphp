<center>
<?php
    $conn = mysqli_connect("10.42.7.98", "test", "0987654321", "mydb");
    // $conn = mysqli_connect("localhost", "root", "", "mydb");
    $sum = 0;
    $msquery_insert = "INSERT INTO customer(custno,custname,sex,address,tel) VALUES('C15','Pook','F','223','086666666')";
    echo "<h3>insert customer</h3>";
    mysqli_query($conn,$msquery_insert);
    echo "insert success";

    $msquery = "SELECT CustNo,CustName,Sex,tel from Customer";
    $stmt = mysqli_query($conn,$msquery);
    echo "<h3>customer list</h3>";
    echo "<table border='1' cellpadding='5' cellspacing='0'>";
    echo "<tr>
        <th>CustNo</th>
        <th>CustName</th>
        <th>Sex</th>
        <th>Tel</th>
        </tr>";
    while ($row = mysqli_fetch_assoc($stmt)) {

        echo "<tr>
                <td>{$row['CustNo']}</td>
                <td>{$row['CustName']}</td>
                <td>{$row['Sex']}</td>
                <td>{$row['tel']}</td>
            </tr>";
    }
    echo "</table>";
    $msquery_update = "UPDATE Customer
        SET Sex = 'M', tel= '0000000'
        WHERE CustNo = 'C15'";
    echo "<h3>update customer</h3>";
    mysqli_query($conn,$msquery_update);
    echo "update success";

    $msquery = "SELECT CustNo,CustName,Sex,tel from Customer";
    $stmt = mysqli_query($conn,$msquery);
    echo "<h3>customer list</h3>";
    echo "<table border='1' cellpadding='5' cellspacing='0'>";
    echo "<tr>
        <th>CustNo</th>
        <th>CustName</th>
        <th>Sex</th>
        <th>Tel</th>

        </tr>";
    $sum = 0;
    while ($row = mysqli_fetch_assoc($stmt)) {

        echo "<tr>
                <td>{$row['CustNo']}</td>
                <td>{$row['CustName']}</td>
                <td>{$row['Sex']}</td>
                <td>{$row['tel']}</td>
            </tr>";
        $sum += 1;

    }
    echo "</table>";
    echo "<h4>total customer : $sum</h4>";
    mysqli_close($conn);

?>
</center>