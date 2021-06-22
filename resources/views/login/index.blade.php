<!DOCTYPE html>
<html>
<head>
	<title>Login Page</title>
</head>
<body>
    <center>
	
	<form method="post">
		<input type="hidden" name="_token" value="{{csrf_token()}}">
	<table>
		<tr>
			<td>Email</td>
			<td><input type="email" name="email"></td>
		</tr>
		<tr>
			<td>Password</td>
			<td><input type="password" name="password"></td>
		</tr>
		<tr>
			<td></td>
			<td>
			<input type="submit" name="Submit" value="LogIn">
            <br>
			<a href="/reg"> Don't have an Account ?</a>
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