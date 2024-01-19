<?php 
	session_start();
	if(!isset($_COOKIE['status'])){
		header('location: ../views/rlogin.html');
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

    table {
      border: 1px solid black;
      width: 50%;
      margin: auto;
      margin-top: 50px;
      padding: 10px;
    }

    td {
      text-align: center;
      padding: 10px;
    }

    input[type="text"] {
      width: 100%;
      padding: 5px;
      box-sizing: border-box;
      border: 2px solid #ccc;
      border-radius: 4px;
      background-color: #f8f8f8;
      resize: none;
    }

    input[type="submit"], input[type="reset"] {
      background-color: dodgerblue;
      color: white;
      padding: 8px 16px;
      border: none;
      border-radius: 4px;
      cursor: pointer;
      margin-right: 5px;
    }

    input[type="submit"]:hover, input[type="reset"]:hover {
      background-color: royalblue;
    }

    hr {
      border: 1px solid dodgerblue;
    }

    h2 {
      text-align: center;
      margin-top: 0;
    }

  </style>
</head>
<body bgcolor="lightblue">
	

                <form method="POST" action="../controlers/reportCheck.php" enctype="" onsubmit="return appvalidation()" >
                    <table >
                        <tr>
                            <td >
                                <b >Report Feedback <br> <hr></b>
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
                                <b >Review</b>
                            </td>
                            <td>
                                <input id="review" type="txt" name="review" value=""/>
                            </td>
                        </tr>
                        <tr align="center">
                            <td colspan="2">
                                <br><input id="Submit" type="submit" name="submit" value="Submit" > <input id="reset" type="reset" name="reset" value="Reset" />  <input id="update" type="submit" name="update" value="Update"> <br>
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
        let review = document.getElementById('review').value;
        
        
  
        if (name == "") {
          alert("Please enter patient's name"); return false;
        }
        else if (test == "") {
          alert("Please enter test name"); return false;
        }
        
        else if (disease == ""  ) {

          alert("Please enter disease name"); return false;
        }
        else if (review==" ") {
          alert("Please give review"); return false;
        }
        
       
        else {
          return true;
        }
      }
    </script>  
	
</body>
</html>