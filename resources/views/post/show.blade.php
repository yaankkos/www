<!DOCTYPE html>
<html>

<head>
	<title>my view</title>
</head>
<body>
	<table border="1">
		<tr>
			<th>Имя</th>
		<th>Фамилия</th>
		<th>Зарплата</th>
		</tr>
<ul>
	@foreach($employees as $employee)
	<li>
		{{ $employee['name'] }}
		{{ $employee['surname'] }}
		{{ $employee['salary'] }}
	</li>
	@endforeach
</ul>
</table>
</body>

</html>