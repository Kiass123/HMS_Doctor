<html>

   <head>
      <title>Notification bar</title>
   </head>
	
   <body>

      <table border = "1" width = "500" height = "350" align="center">
         
            <tr>
                <td colspan = "3" bgcolor="DodgerBlue" align="center" >Notification Settings</td>
             </tr>
             <tr>
            <td rowspan = "2" bgcolor="lightblue" >
                
                <a href="UserDashboard.php">Back</a><br>
                <a href="logout.php?username=<?=$_COOKIE['status']?>">Log out</a>

            <td>
    
            <td colspan="3" bgcolor="lightBlue" align="center">
                <h1>Notification Bar</h1>
            <p>Nothing to show </p>
            <button type="button">Delete</button>
            

            </td>
        </tr>
      </table>
   </body>
	
</html>