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
   <form method="POST" action="../controlers/deleteCheck.php" enctype="multipart/form-data">

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
                <th>Medicine List</th>
                
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
 
                        <input type="hidden" name="id" value="<?=$row['id']?>"/>
                        <td>
                            <p color="Red">Are you sure you want to delete ?"
                            <a href="../controlers/deleteCheck.php"> <input type="submit" name="yes" value="YES" class="btn"> </a> | 
                            <a href="../views/ViewPrescription.php"> <input type="button" name="" value="NO" class="btn"> </a> 
                        </td>
                       
            </tr>

        <tr>
        <?php

                                                }

?>
</tr>
        
        
        </tr>
      </table>
                                            </form>
      
   </body>
	
</html>