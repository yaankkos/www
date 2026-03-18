<!DOCTYPE html>
<html>

<head>
	<title>my view</title>
</head>
<body>
	@php $i =1; @endphp
<ul>
	@foreach($str as $string)
	<li>{{ $i}} - {{ $string }}</li>
	@php $i++; @endphp
	@endforeach
</ul>
</body>

</html>