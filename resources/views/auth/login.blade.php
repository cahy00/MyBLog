<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Document</title>
</head>
<body>
	<form action="/login/check" method="POST">
		@csrf
		<table>
			<tr>
				<td>
					<input type="email" name="email" placeholder="email">
				</td>
			</tr>
			<tr>
				<td>
					<input type="password" name="password" placeholder="password">
				</td>
			</tr>
			<tr>
				<td>
					<button type="submit">Login</button>
				</td>
			</tr>
		</table>
	</form>
</body>
</html>