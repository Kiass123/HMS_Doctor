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
</head>
<body>
	<table width="1570" >
		<tr >
			
			<td  align="right">
				<a href="logout.php?username=<?=$_COOKIE['status']?>" ><b >Logout</b></a>
			</td>
		</tr>

			<td >
				<table width="710px" align="center">
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
							<b ><?=$_SESSION['current_user'][0]?></b><br><hr>
							<b ><?=$_SESSION['current_user'][1]?></b><br><hr>
							<b ><?=$_SESSION['current_user'][2]?></b><br><hr>
							<b ><?=$_SESSION['current_user'][3]?></b><br><hr>
							<b ><?=$_SESSION['current_user'][4]?></b><br><hr>
							<b ><?=$_SESSION['current_user'][5]?></b><br><hr>
						</td>
					</tr>
					<tr>
						<td colspan="3" align="center">
							<br><a href="profileEdit.php?id=<?=$_SESSION['current_user'][1]?>"><input type="submit" name="submit" value="Edit Profile" style="font-size: 25px; color: #fc5c47;"></a>
						</td>
					</tr>
				</table>
			</td>
			<td  width="270px" valign="Top">
				
			</td>
		</tr>
		
	</table>
</body>
</html>