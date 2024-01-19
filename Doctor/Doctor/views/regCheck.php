<?php 
	session_start();
	
	if(isset($_REQUEST['submit'])){
		
		$name = $_REQUEST['name'];
		$email = $_REQUEST['email'];
		$username = $_REQUEST['username'];
		$password = $_REQUEST['password'];
		$conPass = $_REQUEST['confirmPass'];

		if (empty($_REQUEST['gender'])) {
			echo "Gender is not selected.". "<br>";
		}else{
			$gender = $_REQUEST['gender'];
		}

		$date = $_REQUEST['date'];

		if($name != null && $email != null && $username != null && $password != null && $conPass != null && $date != null){
			if ($password == $conPass) {
				$user = "\n".$name."|".$username."|".$email."|".$password."|".$gender."|".$date;
				$file = fopen('users.txt', 'a');
				fwrite($file, $user);
				fclose($file);
				header('location: login.php');
			}else{
				echo "passwords does not match";
			}
			
		}else{
			echo "null submission";
		}
	}