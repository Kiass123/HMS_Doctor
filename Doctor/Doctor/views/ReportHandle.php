<?php 
    session_start();
    if(!isset($_COOKIE['status'])){
        header('location: login.php');
    }
?>
<!DOCTYPE html>
<html>

   <body>

      <table border = "1" width = "800" height = "350" align="center">
      <!-- add time in form -->
         
            <tr>
                <td colspan = "3" bgcolor="DodgerBlue" align="center" >Report Handle</td>
             </tr>
           <tr>
            <td rowspan = "3" bgcolor="lightblue"  >
                <a href="ViewReport.php">View Reports</a><br>
                <a href="Logout.php?username=<?=$_COOKIE['status']?>">Log out</a><br>
                <a href="UserDashboard.php">Back</a>


            </td>

            <td colspan="3" bgcolor="lightblue" align="center">
            <form method="post" action="abc.html" enctype="">
                            <fieldset>
                                <legend>Report Handle</legend>
                                <table>
                                    <tr>
                                        <td>Patient Name: </td>
                                        <td>:</td>
                                        <td><input type="text" name="name" value=""></td>
                                    </tr>
                    
                                   
                                    <tr>
                                        <td>Test Name</td>
                                        <td>:</td>
                                        <td><input type="text" name="tname" value=""></td>
                                    </tr>
                                    <tr>
                                        <td>Disease </td>
                                        <td>:</td>
                                        <td><input type="text" name="disease" value=""></td>
                                    </tr>
                                    <tr>
                                        <td>Doctor Name</td>
                                        <td>:</td>
                                    
                                        <td><input type="text" name="dname"></td>
                                        <hr>
                                    </tr>
                                </table>
                                <hr>
                                <input type="submit" name="btn" id="Submit">
                                <input type="reset" id="Reset">
                            </fieldset>
                        </form>








         </td>

        </tr>
      </table>
   </body>
	
</html>