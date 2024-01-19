<?php 
    require_once ('../models/reportDb.php');
    session_start();
    if(!isset($_COOKIE['status'])){
        header('location: ../views/rlogin.html');
    }
    $id = $_REQUEST['id'];
    $row = Report_info($id);
?>
<!DOCTYPE html>
<html>

   <body>
    <form method="POST" action="../controlers/rEditCheck.php" enctype="multipart/form-data">
    <input type="hidden" name="id" value="<?=$id?>"/>

      <table border = "1" width = "1000px" height = "500px" align="center">

        <tr>
                <td colspan = "3" bgcolor="DodgerBlue" align="center" >View Report</td>
             </tr>
           <tr>
            <td rowspan="3"  align="center"bgcolor="lightblue">
            <table width="800;" height="400px" border="1" >
        
            <tr>
                <td>
                <b>Patient Name</b><br><hr>
                <b>Test Name</b><br><hr>
                <b>Disease</b><br><hr>
                <b>Review</b><br><hr>
                </td>
                <td align="center">
								<b><?=$row['id']?></b><br><hr>
								<input type="text" name="name" value="<?=$row['name']?>"/></b><br><hr>
								<input type="text" name="test" value="<?=$row['test']?>"/></b><br><hr>
								<input type="text" name="disease" value="<?=$row['disease']?>"/></b><br><hr>
								<input type="text" name="review" value="<?=$row['review']?>"/></b><br><hr>
							<td colspan="3" align="center">
								<br><input type="submit" name="update" value="Update" style="font-size: 25px;" class="btn" /></a> <input type="reset" name="reset" value="Reset" style="font-size: 25px;" class="btn" /> <br>
							</td>
						</tr>
            </tr>
        </tr>
      </table>
</form>


   </body>
	
</html>