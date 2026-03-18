<!DOCTYPE html>
<html>

<head>
	<title>my view</title>
</head>
<body>
	@php $i =1; @endphp
<ul>
	@foreach($num as $number)
	@if($number % 2 == 0)
	<li>{{ $number }}</li>
	@endif
	@endForeach
	
</ul>
</body>

</html>