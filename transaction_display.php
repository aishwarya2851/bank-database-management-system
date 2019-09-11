<html>
    <head>
         <head><center><h1>TRANSACTION DETAILS</h1></center>
        <style type="text/css">
            body{
                background-color:white;
            }
            
            </style>
    <body>
        
            
    <?php

           include('dbconnect.php');
    $sql='SELECT * FROM transaction';
    $result=$conn->query($sql);
    echo "<table border='1'>
       <tr><th>Acc_N0</th><th>Withdrawal</th><th>Savings</th><th>Loan</th><th>";
    while ($row = $result->fetch_assoc())
            {
     echo "<tr>";
    echo "<td>".$row['acc_no']."</td>";
    echo "<td>".$row['withdrawal']."</td>";
            echo "<td>".$row['savings']."</td>";
            echo "<td>".$row['loan']."</td>";

    echo "</tr>";    
    
    }
    echo"</table>";
 
 ?>
        </center> <center><li><a href=HOME.PHP>Back to home page.</a></li> </center> 
    </body>
    </head>
</html>