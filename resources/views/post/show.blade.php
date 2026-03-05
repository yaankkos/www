<!DOCTYPE html>
<html>
	<head>
		<title>my view</title>
	</head>
@foreach ($arr as $elem)
	@if ($loop->odd)
		нечетная итерация
	@endif
	
	@if ($loop->even)
		четная итерация
	@endif
		
	{{ $elem }}
@endforeach

	</body>
</html>
