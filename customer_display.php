<html>
    <head>
         <head><center><h1>CUSTOMER DETAILS</h1></center>
        <style type="text/css">
            body{
                background-color:white;
            }
            
            </style>
    <body>
        
            
    <?php

    include('dbconnect.php');
    $sql='SELECT * FROM customer';
    $result=$conn->query($sql);
    echo "<table border='1'>
       <tr><th>Name</th><th>Ssn</th><th>Address</th><th>Ph_no</th><th>Acc_no</th><th>";
    while ($row = $result->fetch_assoc())
            {
     echo "<tr>";
    echo "<td>".$row['name']."</td>";
    echo "<td>".$row['ssn']."</td>";
            echo "<td>".$row['address']."</td>";
            echo "<td>".$row['ph_no']."</td>";
             echo "<td>".$row['acc_no']."</td>";
    echo "</tr>";    
    
    }
    echo"</table>";
 
 
 ?>
        </center> <center><li><a href=HOME.PHP>Back to home page.</a></li> </center> 
    </body>
    </head>
</html>