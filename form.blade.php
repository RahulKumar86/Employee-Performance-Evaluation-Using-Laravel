<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="bootstrap.min.css">

		<script src="bootstrap.min.js"></script>
	<title></title>
</head>
<body>
	<form action="testcontroller" method="GET">@csrf
		<table class="table table-dark table-hover table-striped">
			<tr>
			<td>Name:<input type="text" name="name">@error('name')</td>
			<td><div>{{$message}}</div>@enderror</td>
            </tr>
            <tr>
			<td>Address:<input type="text" name="address">@error('address')</td>
			<td><div>{{$message}}</div>@enderror<br></td>
            </tr>
            <tr>
			<td>Password:<input type="password" name="password">@error('address')</td>
			<td><div>{{$message}}</div>@enderror<br></td>
            </tr>
            <tr>
            <td>
			<input type="submit" name="submit" value="Submit"></td></tr>
		</table>
		
	</form>
</body>
</html>