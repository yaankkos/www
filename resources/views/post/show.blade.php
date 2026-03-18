<!DOCTYPE html>
<html>

<head>
	<title>my view</title>
</head>
<body>
<ul>
	@foreach($numbers as $key => $value)
	<li>{{ $key  }} - {{ $value }}</li>
	@endForeach
</ul>
</body>

</html>