<!DOCTYPE html>
<html>
<head>
	<title>Patient Information Form</title>
	<style>
		form {
			width: 50%;
			margin: 0 auto;
		}
		label {
			display: block;
			margin-top: 10px;
		}
		input[type=text], select {
			padding: 5px;
			margin-top: 5px;
			width: 100%;
			border: 1px solid #ccc;
			border-radius: 4px;
			box-sizing: border-box;
		}
		input[type=submit], input[type=reset] {
			background-color: #4CAF50;
			color: white;
			padding: 8px 16px;
			margin-top: 10px;
			border: none;
			border-radius: 4px;
			cursor: pointer;
			float: left;
			margin-right: 10px;
		}
		input[type=submit]:hover, input[type=reset]:hover {
			background-color: #45a049;
		}
		.container {
			border-radius: 5px;
			background-color: #f2f2f2;
			padding: 20px;
		}
	</style>
</head>
<body>
	<div class="container">
		<h2>Patient Information Form</h2>
		<form method="post" action="">
			<label for="name">Name:</label>
			<input type="text" id="name" name="name" placeholder="Enter your name" required>

			<label for="gender">Gender:</label>
			<select id="gender" name="gender">
				<option value="">Select your gender</option>
				<option value="male">Male</option>
				<option value="female">Female</option>
				<option value="other">Other</option>
			</select>

			<label for="dob">Date of Birth:</label>
			<input type="text" id="dob" name="dob" placeholder="DD/MM/YYYY" required>

			<label for="disease">Disease:</label>
			<input type="text" id="disease" name="disease" placeholder="Enter the disease you are suffering from" required>

			<label for="medical_history">Medical History:</label>
			<textarea id="medical_history" name="medical_history" placeholder="Enter your medical history"></textarea>

			<label for="lab_result">Lab Result:</label>
			<textarea id="lab_result" name="lab_result" placeholder="Enter your lab results"></textarea>

			<label for="action">Action:</label>
			<textarea id="action" name="action" placeholder="Enter the action to be taken"></textarea>
			<br>

			<input type="submit" name="submit" value="Submit">
			<input type="submit" name="update" value="Update">
			<input type="submit" name="delete" value="Delete">
			<input type="reset" name="reset" value="Reset">
		</form>
	</div>
	<div id="Receipt"></div>

<script>
  // AJAX function to send form data to pReceipt.php
  document.getElementById("info").addEventListener("submit", function(event) {
    event.preventDefault();
    var formData = new FormData(event.target);

    var xhr = new XMLHttpRequest();
    xhr.open("POST", "pReceipt.php");
    xhr.onload = function() {
      document.getElementById("Receipt").innerHTML = this.responseText;
    };
    xhr.send(formData);
  });
</script>
</body>
</html>
