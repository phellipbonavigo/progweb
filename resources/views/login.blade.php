<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

	<form action="/tenta_login" method="POST">
		@csrf
		<input type="text" name="email">
		<input type="password" name="senha">
		<input type="submit">

	</form>

</body>
</html>