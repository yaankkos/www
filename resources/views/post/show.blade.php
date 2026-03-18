<!DOCTYPE html>
<html>

<head>
	<title>my view</title>
</head>
<body>
<ul>
	@foreach($str as $index => $string)
	<li>{{ $index }} - {{ $string }}</li>
	@endforeach
</ul>
</body>

</html>