<!DOCTYPE html>
<html>
	<head>
		<title>my view</title>
	</head>
@foreach ($arr as $elem)
	@if ($loop->first)
		первая итерация
	@endif
	
	@if ($loop->last)
		последняя итерация
	@endif
	
	{{ $elem }}
@endforeach
	</body>
</html>
