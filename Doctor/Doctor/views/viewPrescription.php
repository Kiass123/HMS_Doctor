<?php 
    require_once ('../models/prescriptionDB.php');
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
            margin: 0 auto;
         }
         th {
            background-color: DodgerBlue;
            color: white;
            font-weight: bold;
            text-align: center;
         }
         td {
            text-align: center;
            padding: 5px;
         }
         td:nth-child(1) {
            font-weight: bold;
         }
         td:nth-child(5) {
            display: flex;
            justify-content: center;
         }
         .btn {
            background-color: DodgerBlue;
            color: white;
            padding: 5px 10px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
         }
         .btn:hover {
            background-color: #0b7dda;
         }
      </style>

      <table border = "1" width = "1000px" height = "500px" align="center">

        <tr>
                <td colspan = "3" bgcolor="DodgerBlue" align="center" >View Prescription</td>
             </tr>
          

            <td rowspan="3"  align="center"bgcolor="lightblue">
            <table width="800;" height="400px" border="1" >
        
            <tr>
                <th>Patient Name</th>
                <th>Test Name </th>
                <th>Disease</th>
                <th>Medicine</th>
                
            </tr>
            <?php 
                        $result = getPrescription();
                         while ($row = mysqli_fetch_assoc($result)) {
            ?>

            
            <tr>   
                
                        <td><?=$row['name']?></td>
                        <td><?=$row['test']?></td>
                        <td><?=$row['disease']?></td>
                        <td><?=$row['medicine']?></td>
                        <td>
                            <a href="../views/editPrescription.php?id=<?=$row['id']?>"> <input type="button" name="edit" value="EDIT" class="btn"> </a> | 
                            <a href="../views/deletePrescription.php?id=<?=$row['id']?>" > <input type="button" name="delete" value="DELETE" class="btn"> </a> 
                        </td>
                       
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