<!DOCTYPE html>
<html>

<head>
	<title>my view</title>
</head>
<body>
@if(is_array($data))
<p>Это массив</p>
<ul>
	@foreach($data as $item)
	<li>{{ $item }}</li>
	@endForeach
</ul>	
@else
<p>Это число:</p>
	<p>{{ $data }}</p>
@endif
</body>

</html>