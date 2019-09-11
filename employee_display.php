<html>
    <head>
         <head><center><h1>EMPLOYEE DETAILS</h1></center>
        <style type="text/css">
            body{
                background-color:white;
            }
            
            </style>
    <body>
        
            
    <?php

     include('dbconnect.php');
    $sql='SELECT * FROM emplyee';
    $result=$conn->query($sql);
    echo "<table border='1'>
       <tr><th>Name</th><th>Ssn</th><th>EAddress</th><th>Branch_id</th><th><th>Emp_id</th>";
    while ($row = $result->fetch_assoc())
            {
     echo "<tr>";
    echo "<td>".$row['name']."</td>";
    echo "<td>".$row['ssn']."</td>";
            echo "<td>".$row['eaddress']."</td>";
            echo "<td>".$row['banch_id']."</td>";
             echo "<td>".$row['emp_id']."</td>";
    echo "</tr>";    
    
    }
    echo"</table>";
 
 ?>
        </center> <center><li><a href=HOME.PHP>Back to home page.</a></li> </center> 
    </body>
    </head>
</html>
