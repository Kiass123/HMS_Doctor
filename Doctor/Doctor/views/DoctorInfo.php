<!DOCTYPE html>
<html>
<head>
	<title>Doctor Information</title>
	<style>
		label {
			display: inline-block;
			width: 150px;
			margin-bottom: 10px;
		}
		input[type="text"], select {
			width: 200px;
			padding: 5px;
			border: 1px solid #ccc;
			border-radius: 4px;
			box-sizing: border-box;
			margin-bottom: 10px;
		}
		input[type="submit"], input[type="button"] {
			background-color: #4CAF50;
			color: white;
			padding: 10px 20px;
			border: none;
			border-radius: 4px;
			cursor: pointer;
			float: left;
			margin-right: 10px;
		}
		input[type="submit"]:hover, input[type="button"]:hover {
			background-color: #45a049;
		}
	</style>
</head>
<body>
	<h2>Doctor Information</h2>
	<form method="POST" action="" id="info">
		<label for="name">Name:</label>
		<input type="text" id="name" name="name" required><br>

		<label for="gender">Gender:</label>
		<select id="gender" name="gender" required>
			<option value="">-- Select --</option>
			<option value="male">Male</option>
			<option value="female">Female</option>
			<option value="other">Other</option>
		</select><br>

		<label for="degree">Medical Degree:</label>
		<input type="text" id="degree" name="degree" required><br>

		<label for="field">Medical Field:</label>
		<input type="text" id="field" name="field" required><br>

		<label for="schedule">Schedule Time:</label>
		<input type="text" id="schedule" name="schedule" required><br>

		<input type="submit" name="submit" value="Submit">
		<input type="button" name="update" value="Update">
		<input type="button" name="delete" value="Delete">
	</form>

	
<div id="receipt"></div>

<script>
  // AJAX function to send form data to receipt.php
  document.getElementById("info").addEventListener("submit", function(event) {
    event.preventDefault();
    var formData = new FormData(event.target);

    var xhr = new XMLHttpRequest();
    xhr.open("POST", "receipt.php");
    xhr.onload = function() {
      document.getElementById("receipt").innerHTML = this.responseText;
    };
    xhr.send(formData);
  });
</script>
</body>
</html>
