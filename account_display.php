<html>
    <head>
         <head><center><h1>ACCOUNT DETAILS</h1></center>
        <style type="text/css">
            body{
                background-color:white;
            }
            
            </style>
    <body>
        
 3           
    <?php

    include('dbconnect.php');
    $sql='SELECT * FROM account';
    $result=$conn->query($sql);
    echo "<table border='1'>
       <tr><th>Acc_type</th><th>Amount</th><th>Acc_no</th><th>Branch_id  </th>";
    while ($row = $result->fetch_assoc())
            {
     echo "<tr>";
    echo "<td>".$row['Acc_type']."</td>";
    echo "<td>".$row['Amount']."</td>";
            echo "<td>".$row['acc_no']."</td>";
            echo "<td>".$row['branch_id']."</td>";
    echo "</tr>";    
    
    }
    echo"</table>";
 
 ?>
        
        </center> <center><li><a href=HOME.PHP>Back to home page.</a></li> </center> 
    </body>
    </head>
</html>
