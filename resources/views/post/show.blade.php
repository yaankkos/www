<!DOCTYPE html>
<html>

<head>
	<title>my view</title>
</head>
<body>
	@php $i =1; @endphp
<ul>
	@foreach($fruits as $key => $value)
	<li>{{ $i }} - {{ $value }}</li>
	@php $i++; @endphp
	@endForeach
	
</ul>
</body>

</html>