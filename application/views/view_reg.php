<!DOCTYPE html>
<html lang="en">
<head>
	<title>Registration</title>
</head>
<body background="/library/image/regback.jpg" style="background-color: #BDBDBD; background-repeat: no-repeat; background-size:cover;">
	<form  method="post">
	<br></br>
		<table cellspacing="2" cellpadding="2" border="0" align="center">
		<tr>
			<td>
				<ul>
					<p><font size="6">Simple Registration System</font></p>
				</ul>
			</td>
		</tr>
		</table>
		<br></br>
		<table cellspacing="2" cellpadding="2" border="0" align="center">		
			<tr>
				<td><font size="5" color='WHITE'>Username :</font></td>
				<td><input type="text" name = "uname" placeholder="User name" style ="height:30px;font:20px;width:300px;"></td>
			</tr>
			<tr>
				<td><font size="5" color='WHITE'>Email :</font></td>
				<td><input type="email" name = "email" placeholder="Email" style ="height:30px;font:20px;width:300px;"></td>
			</tr>
			<tr>
				<td><font size="5" color='WHITE'>Gender :</font></td>
				<td><input type="radio" name="gender" value="male"> Male<br>
					<input type="radio" name="gender" value="female"> Female</td>
			</tr>
			<tr>
				<td><font size="5" color='WHITE'>Password :</font></td>
				<td><input type="password" name = "pass" placeholder="Password" style ="height:30px;font:20px;width:300px;"></td>
			</tr>
			<tr>
				<td><font size="5" color='WHITE'>Confirm Password :</font></td>
				<td><input type="password" name = "cpass" placeholder="Confirm Password" style ="height:30px;font:20px;width:300px;"></td>
			</tr>
			<tr>
				<td><font size="5" color='WHITE'>Address :</font></td>
				<td><input type="text" name = "address" placeholder="Address" style ="height:30px;font:20px;width:300px;"></td>
			</tr>
			<tr>
				<td><font size="5" color='WHITE'>Phone :</font></td>
				<td><input type="number" name = "phone" placeholder="Phone" style ="height:30px;font:20px;width:300px;"></td>
			</tr>
			<tr>
				<td> </td>
				<td>
					<p><font size="5" color='RED'><?php if($this->input->post('buttonreg')){echo $message;} ?></p>
				</td>
			</tr>
			<tr>
				<td> </td>
				<td><input type="submit" value="Submit" name ="buttonreg" style="background-color:#A4A4A4; height:30px; width:80px"></td>
			</tr>
			<tr>
			<td></td>		
			</tr>
		
			<tr>
				<td colspan="2" align="center"><font size="4" color='RED'>Already Registered??</font></td>  
			</tr>
			<tr>
				<td colspan="2" align="center"><font size="4" color='RED'>Please <a href="/library/home">Click Here</a> for Login</font><br><br></td>      
			</tr>
		</table>
	</form>		
</body>
</html>
