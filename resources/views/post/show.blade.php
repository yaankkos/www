<!DOCTYPE html>
<html>

<head>
	<title>my view</title>
</head>
<body>
<ul>
	@foreach($employees as $employee)
	<li>
		{{ $employee['name'] }}
		{{ $employee['surname'] }}
		{{ $employee['salary'] }}
	</li>
	@endforeach
</ul>
</body>

</html>