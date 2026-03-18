<!DOCTYPE html>
<html>

<head>
	<title>my view</title>
</head>
<body>
<ul>
	@foreach($numbers as $number)
	<li>{{ sqrt($number)  }}</li>
	@endForeach
</ul>
</body>

</html>