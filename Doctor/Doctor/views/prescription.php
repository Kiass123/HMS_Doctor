<?php 
	session_start();
	if(!isset($_COOKIE['status'])){
		header('location: login.php');
	}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Hospital Managment System</title>

	<style>
		body {
			background-color: lightblue;
		}
		form {
			margin: 50px auto;
			width: 50%;
			padding: 20px;
			border: 2px solid black;
			border-radius: 10px;
			background-color: white;
		}
		h1 {
			text-align: center;
			margin-bottom: 20px;
		}
		table {
			margin: 0 auto;
		}
		td {
			padding: 10px;
			text-align: right;
		}
		input[type="text"] {
			padding: 5px;
			border: 1px solid #ccc;
			border-radius: 5px;
			width: 100%;
			max-width: 500px;
		}
		input[type="submit"], input[type="reset"] {
			padding: 5px 10px;
			border-radius: 5px;
			border: none;
			color: white;
			background-color: #4CAF50;
			cursor: pointer;
			margin-right: 10px;
		}
		input[type="submit"]:hover, input[type="reset"]:hover {
			background-color: #45a049;
		}
		input[type="submit"]:active, input[type="reset"]:active {
			background-color: #3e8e41;
		}
	</style>
    
</head>
<body bgcolor="lightblue">
	

                <form method="POST" action="../controlers/prescriptionCheck.php"  onsubmit="return appvalidation()">
                    <table >
                        <tr>
                            <td >
                                <b >Prescription<br> <hr></b>
                            </td>
                        </tr>
                        <tr align="center">
                            <td>
                                <b>Patient name :</b>
                            </td>
                            <td>
                                <input id="name" type="text" name="name" value=""/>
                            </td>
                        </tr>
                       
                        <tr align="center">
                            <td>
                                <b >Test name :</b>
                            </td>
                            <td>
                                <input id="test" type="text" name="test" value=""/>
                            </td>
                        </tr>
                        <tr align="center">
                            <td>
                                <b>Disease :</b>
                            </td>
                            <td>
                                <input id="disease" type="txt" name="disease" value=""/>
                            </td>
                        </tr>
                        <tr align="center">
                            <td>
                                <b >Medicine list :</b>
                            </td>
                            <td>
                                <input id="medicine" type="txt" name="medicine" value=""/>
                            </td>
                        </tr>
                        <tr align="center">
                            <td colspan="2">
                                <br><input id="Submit" type="submit" name="submit" value="Submit" > <input id="Reset" type="reset" name="reset" value="Reset" />  <input id="Update" type="submit" name="update" value="Update"> <br>
                            </td>
                        </tr>
                    </table>
				</form>
			</td>
			<td  >
				
			</td>
		</tr>
	
		<script>
		
		function appvalidation(){
	
		  let name = document.getElementById('name').value;
		  let test = document.getElementById('test').value;
		  let disease = document.getElementById('disease').value;
		  let medicine = document.getElementById('medicine').value;

		
		  
	
		  if (name == "") {
			alert("Please enter patient's name"); return false;
		  }
		  else if (test == "") {
			alert("Please enter test name"); return false;
		  }
		  else if (disease=="") {
			alert("Please enter disease name"); return false;
		  }
		  else if (medicine=="") {
			alert("Please enter medicine name"); return false;
		  }
		 
		 
		  else {
			return true;
		  }
		}
	  </script>  
	
</body>
</html>