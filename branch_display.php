

<html>
    <head>
         <head><center><h1>BRANCH DETAILS</h1></center>
        <style type="text/css">
            body{
                background-color:white;
            }
            
            </style>
    <body>
        
            
    <?php

     include('dbconnect.php');
    $sql='SELECT * FROM branch';
    $result=$conn->query($sql);
    echo "<table border='1'>
       <tr><th>Branch_id</th><th>ifsccode</th><th>Location</th>";
    while ($row = $result->fetch_assoc())
            {
     echo "<tr>";
    echo "<td>".$row['branch_id']."</td>";
    echo "<td>".$row['ifsccode']."</td>";
            echo "<td>".$row['location']."</td>";
            
    echo "</tr>";    
    
    }
    echo"</table>";
 
 ?>
        </center> <center><li><a href=HOME.PHP>Back to home page.</a></li> </center> 
 
    </body>
    </head>
</html>