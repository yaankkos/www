<!DOCTYPE html>
<html>

<head>
	<title>my view</title>
</head>
<body>
@foreach($num as $index => $number)
@if($loop ->iteration >count($numbers) - 3)
<i>{{ $number }}</i><br>
<b>{{ $number }}</b>
@endif
@endforeach
</body>

</html>