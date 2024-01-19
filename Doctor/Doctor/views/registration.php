<html>
<head>
	<title>Hospital Managment System</title>
</head>
<body >
	<table width="1570" cellspacing="0" bgcolor="lightblue">

		<tr height="611px" >
			<td width="270px" >
				
			</td>
			<td  align="center">
                <form method="POST" action="regCheck.php" enctype="multipart/form-data">
                    <fieldset>
                        <table width="500">
                            <tr align="center">
                                <td colspan="2">
                                    <b >Registration<br> <hr></b>
                                </td>
                            </tr>
                            <tr align="center">
                                <td>
                                    <b >Name :</b>
                                </td>
                                <td>
                                    <input type="text" name="name" value=""/>
                                </td>
                            </tr>
                            <tr align="center">
                                <td>
                                    <b >Email :</b>
                                </td>
                                <td>
                                    <input type="email" name="email" value=""/>
                                </td>
                            </tr>
                            <tr align="center">
                                <td>
                                    <b >Username :</b>
                                </td>
                                <td>
                                    <input type="text" name="username" value=""/>
                                </td>
                            </tr>
                            <tr align="center">
                                <td>
                                    <b >Password :</b>
                                </td>
                                <td>
                                    <input type="password" name="password" value=""/>
                                </td>
                            </tr>
                            <tr align="center">
                                <td>
                                    <b >Confirm Password :</b>
                                </td>
                                <td>
                                    <input type="password" name="confirmPass" value=""/>
                                </td>
                            </tr>
                            <tr align="center">
                                <td>
                                    <b>Gender :</b>
                                </td>
                                <td>
                                    <input type="radio" name="gender" value="Male"/> <b >Male</b>
                                    <input type="radio" name="gender" value="Female"/> <b >Female</b>
                                    <input type="radio" name="gender" value="Other"/> <b>Other</b>
                                </td>
                            </tr>
                            <tr align="center">
                                <td>
                                    <b >Date of Birth :</b>
                                </td>
                                <td>
                                    <input type="date" name="date" value=""/>
                                </td>
                            </tr>
                            <tr align="center">
                                <td colspan="2">
                                    <br><input type="submit" name="submit" value="Submit" > <input type="reset" name="reset" value="Reset"  /> <br><hr>
                                </td>
                            </tr>
                        </table>
                    </fieldset>
				</form>
			</td>
			<td  width="270px" valign="Top">
				
			</td>
		</tr>
		
	</table>
</body>
</html>