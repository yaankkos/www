<!DOCTYPE html>
<html>
	<head>
		<title>my view</title>
	</head>
	<!-- следующей итерации цикла с помощью директивы continue -->
<!-- @foreach ($arr as $elem)
	@if ($elem == 3)
		@continue
	@endif
	
	{{ $elem }}
@endforeach -->

<!-- Можно включить условие в строку объявления директивы -->

@foreach ($arr as $elem)
	@continue($elem == 3)
	
	{{ $elem }}
@endforeach

	</body>
</html>
