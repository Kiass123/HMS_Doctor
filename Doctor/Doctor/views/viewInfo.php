<!DOCTYPE html>
<html>
<head>
	<title>Choose Information Type</title>
	<style>
		body {
			background-color: #f0f0f0;
			font-family: Arial, sans-serif;
		}
		h1 {
			text-align: center;
			margin-top: 50px;
		}
		.container {
			display: flex;
			flex-direction: column;
			align-items: center;
			margin-top: 50px;
		}
		.option {
			width: 300px;
			height: 60px;
			background-color: #fff;
			border-radius: 5px;
			box-shadow: 0px 2px 5px #ccc;
			display: flex;
			align-items: center;
			justify-content: center;
			font-size: 20px;
			font-weight: bold;
			color: #555;
			margin-bottom: 30px;
			cursor: pointer;
			transition: all 0.2s ease-in-out;
		}
		.option:hover {
			transform: translateY(-5px);
			box-shadow: 0px 5px 10px #ccc;
		}
	</style>
</head>
<body>
	<h1>Choose Information Type</h1>
	<div class="container">
		<a href="DoctorInfo.php" class="option">Doctor Information</a>
		<a href="PatientInfo.php" class="option">Patient Information</a>
	</div>
</body>
</html>


