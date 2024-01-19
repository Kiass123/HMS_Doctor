<?php 
    require_once ('../models/reportDb.php');
    session_start();
    if(!isset($_COOKIE['status'])){
        header('location: ../views/rlogin.html');
    }
?>
<!DOCTYPE html>
<html>

   <body>
   <style>
            table {
                border: 1px solid black;
                width: 1000px;
                height: 500px;
                margin: auto;
            }
            
            th {
                padding: 10px;
                background-color: DodgerBlue;
                color: white;
            }
            
            td {
                padding: 10px;
                text-align: center;
                background-color: lightblue;
            }
            
            tr:nth-child(even) {
                background-color: #f2f2f2;
            }
            
            tr:hover {
                background-color: #ddd;
            }
        </style>

      <table border = "1" width = "1000px" height = "500px" align="center">

        <tr>
                <td colspan = "3" bgcolor="DodgerBlue" align="center" >View Report</td>
             </tr>
          

            <td rowspan="3"  align="center"bgcolor="lightblue">
            <table width="800;" height="400px" border="1" >
        
            <tr>
                <th>Patient Name</th>
                <th>Test Name </th>
                <th>Disease</th>
                <th>Review</th>
                
            </tr>
            <?php 
                        $result = getReport();
                         while ($row = mysqli_fetch_assoc($result)) {
            ?>

            
            <tr>   
                
                        <td><?=$row['name']?></td>
                        <td><?=$row['test']?></td>
                        <td><?=$row['disease']?></td>
                        <td><?=$row['review']?></td>
                      
                       
            </tr>

        <tr>
        <?php

                                                }

?>
</tr>
        
        
        </tr>
      </table>

      
   </body>
	
</html>