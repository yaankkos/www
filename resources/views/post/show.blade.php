<!DOCTYPE html>
<html>

<head>
	<title>my view</title>
</head>
<body>
<ul>
	@foreach($str as $string)
	@if($loop ->first)
	<li class="first">{{ $loop -> iteration }} - {{ $string }}</li>
	@elseif($loop -> iteration)
	<li class="last">{{ $loop -> iteration }} - {{ $string }}</li>
	@else
	<li>{{ $loop -> iteration }} - {{ $string }}</li>
	@endif
	@endforeach
</ul>
</body>

</html>