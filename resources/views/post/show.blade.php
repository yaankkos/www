<!DOCTYPE html>
<html>

<head>
	<title>my view</title>
</head>
<body>
@foreach($num as $number)
@if($number == 0)
@break
@endif
<p>{{ $number }}</p>
@endforeach
</body>

</html>