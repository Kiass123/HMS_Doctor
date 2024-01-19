<?php 
	session_start();
	if(!isset($_COOKIE['status'])){
		header('location: ../views/rlogin.php');
	}
?>
<html>

   <head>
      <title>Doctor's Dashboard</title>

      <style>
		body {
			background-color: lightgray;
		}

		table {
			border: 1px solid black;
			width: 800px;
			height: 350px;
			margin: 0 auto;
		}

		th {
			background-color: DodgerBlue;
			color: white;
			font-size: 24px;
			text-align: center;
			padding: 10px;
		}

		td {
			background-color: lightblue;
			font-size: 20px;
			text-align: center;
			padding: 20px;
		}

		a {
			text-decoration: none;
			color: black;
			font-size: 20px;
			font-weight: bold;
			padding: 10px;
			border: 2px solid black;
			border-radius: 5px;
			background-color: white;
		}

		a:hover {
			background-color: DodgerBlue;
			color: white;
		}
	</style>
   </head>
	
   <body>

      <table border = "1" width = "800" height = "350" align="center">
         
            <tr>
                <td colspan = "2" bgcolor="DodgerBlue" align="center" >Welcome to Hospital Management System</td>
                <a href="../controlers/logout.php?username=<?$_COOKIE['status']?>">Log out</a>
               
             </tr>
         <tr>
            
            <td bgcolor="lightblue" align="center">
                <a href="../views/ReportHandle.php">Report Handle</a>
            </td>
            </tr>
            <tr>
            <td bgcolor="lightblue" align="center">
                <a href="reportReview.php">Report Review</a>
            </td>
            </tr>
         <tr>
            <td colspan="2" bgcolor="lightblue" align="center">
                <a href="prescription.php">Prescription</a><br>
            </td>
           
         </tr>
         <tr>
           
            <td colspan="2" bgcolor="lightblue" align="center">
                <a href="telemedicine.php">Telemedicine</a><br>
            </td>
            </tr>
            <tr>
            <td colspan="2" bgcolor="lightblue" align="center">
                <a href="../views/viewInfo.php">Information list</a><br>
            </td>
            </tr>
      </table>
   </body>
	
</html>