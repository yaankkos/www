<!DOCTYPE html>
<html>

<head>
	<title>my view</title>
</head>
<body>
	<ul>
@foreach($num as $number)
@if($number == 0)
@continue
@endif
<p>{{ $number }}</p>
@endforeach
</ul>
</body>

</html>