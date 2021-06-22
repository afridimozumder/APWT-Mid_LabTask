<!DOCTYPE html>
<html>
<head>
	<title>Login Page</title>
</head>
<body>
    <center>
	
	<form method="post">
        <h2>| Customer Registration |</h2><br>
	<table>
		<tr>
			<td>Name</td>
			<td><input type="Name" name="name"></td>
		</tr>
        <tr>
			<td>Email</td>
			<td><input type="email" name="email"></td>
		</tr>
		<tr>
			<td>Password</td>
			<td><input type="password" name="password"></td>
		</tr>
        <tr>
			<td>Re-Type Password</td>
			<td><input type="password" name="repassword"></td>
		</tr>
		<tr>
			<td></td>
			<td>
			<input type="submit" name="reg" value="Submit">
            <br>
			Already have an Account ?<br><a href="/login">LogIn</a>
			</td>
		</tr>
	</table>
	</form>
	
	<br>
	{{session('msg')}}
	<br>
	@foreach ($errors->all() as $error)
		{{$error}} <br>
	@endforeach
    </center>
</body>
</html>