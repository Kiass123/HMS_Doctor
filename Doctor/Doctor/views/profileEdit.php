<?php 
	session_start();
	if(!isset($_COOKIE['status'])){
		header('location: login.php');
	}

	$id = $_GET['id'];

	$file = fopen('users.txt', 'r');

	while (!feof($file)) {
		$user = fgets($file);
		$userArray = explode('|', $user);
		if($userArray[1] == $id){
			break;
		}
	}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Hospital Managment System</title>
</head>
<body>
	<table width="1570" cellspacing="0">
		<tr>
			<td  align="right">
				<a href="logout.php?username=<?=$_COOKIE['status']?>" ><b >Logout</b></a>
			</td>
		</tr>
		
		<tr height="611px" >
			<td width="270px">
				
			</td>
			<td >
				<form method="POST" action="../controllers/update.php" enctype="multipart/form-data">
					<input type="hidden" name="id" value="<?=$id?>"/>
					<table width="870px" align="center" >
						<tr>
							<td colspan="3" align="center">
								<b >Profile<br> <hr></b>
							</td>
						</tr>
						<tr>
							<td align="center">
								<b >Name</b><br><hr>
								<b >Username</b><br><hr>
								<b >Email</b><br><hr>
								<b >Password</b><br><hr>
								<b >Gender</b><br><hr>
								<b >Date of Birth</b><br><hr>
							</td>
							<td align="center">
								<input type="text" name="name" value="<?=$_SESSION['current_user'][0]?>"/></b><br><hr>
								<input type="text" name="username" value="<?=$_SESSION['current_user'][1]?>" /></b><br><hr>
								<input type="email" name="email" value="<?=$_SESSION['current_user'][2]?>" /></b><br><hr>
								<input type="password" name="password" value="<?=$_SESSION['current_user'][3]?>" /></b><br><hr>

								<input type="radio" name="gender" value="Male"<?php if($_SESSION['current_user'][4] == "Male") { echo "checked";}?>/> <b >Male</b>
								<input type="radio" name="gender" value="Female"<?php if($_SESSION['current_user'][4] == "Female") { echo "checked";}?>/> <b >Female</b>
								<input type="radio" name="gender" value="Other" <?php if($_SESSION['current_user'][4] == "Other") { echo "checked";}?>/> <b ></b><br>
								<input type="date" name="date" value="<?=trim($_SESSION['current_user'][5])?>" /></b><br><hr>
							</td>
						</tr>
						<tr>
							<td colspan="3" align="center">
								<br><a href="profileEdit.php"><input type="submit" name="update" value="Update" /></a> <input type="reset" name="reset" value="Reset"  /> <br>
							</td>
						</tr>
					</table>
				</form>
			</td>
			<td  width="270px" valign="Top">
				
			</td>
		</tr>
		
	</table>
</body>
</html>