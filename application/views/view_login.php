<html>
<head>
	<title>Login</title>
</head>
<body background="/library/image/login.jpg" style="background-color: #BDBDBD; background-repeat: no-repeat; background-size:cover;">
	<br></br>
	<br></br>
	<table cellspacing="2" cellpadding="2" border="0" align="center">
		<tr>
			<td>
				<ul>
					<p><font size="6">USER LOGIN</font></p>
				</ul>
			</td>
		</tr>
		</table>
	
	<br></br>
	
	<form method="post">
		<table cellspacing="2" cellpadding="2" border="0" align="center">
			<tr>
				<td>
					<img src="/library/image/usericon.png" alt="Smiley face" height="30px" width="30px">
					<input type="email" name = "email" placeholder="Email" style="font-size:20pt;"><br></br>
				</td>
			</tr>
			<tr>
				<td><img src="/library/image/passicon.png" alt="Smiley face" height="30px" width="30px">
				<input type="password" name = "password" placeholder="Password" style="font-size:20pt;"><br></br></td>
			</tr>
			<tr>
				<td>
					<p><font size="5" color='RED'><?php if($this->input->post('buttonlogin')){echo $message;} ?></p>
				</td>
			</tr>
			 <tr>
				<td><input type="submit" value="Sign In" name= "buttonlogin" style="background-color:#A4A4A4; height:30px; width:80px"></td>
			</tr>
			<tr>
				<td colspan="2" align="center"><a href="/library/home/resetpass"><font size="4" color='RED'>Forget Password?</font></a><br><br></td>      
			</tr>
			<tr>
				<td></td>		
			</tr>
		
			<tr>
				<td colspan="2" align="center"><font size="4" color='RED'>Not A Member??</font></td>  
			</tr>
			<tr>
				<td colspan="2" align="center"><font size="4" color='RED'>Please <a href="/library/home/reg">Click Here</a> for Registration</font><br><br></td>      
			</tr>
		</table>
	</form>		
</body>
</html>