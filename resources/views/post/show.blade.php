<!DOCTYPE html>
<html>
	<head>
		<title>my view</title>
	</head>
	<!-- Можно завершать работу цикла с помощью директивы break -->
<!-- @foreach ($arr as $elem)
	{{ $elem }}
	
	@if ($elem == 3)
		@break
	@endif
@endforeach -->

<!-- Можно включить условие в строку объявления директивы: -->
@foreach ($arr as $elem)
	{{ $elem }}
	
	@break($elem == 3)
@endforeach

	</body>
</html>
