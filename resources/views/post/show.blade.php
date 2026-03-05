<!DOCTYPE html>
<html>
	<head>
		<title>my view</title>
	</head>
	<!-- индекс текущей итерации -->
<!-- @foreach ($arr as $elem)
	{{ $loop->index }}
	{{ $elem }}
@endforeach -->

<!-- номер текущей операции -->
<!-- @foreach ($arr as $elem)
	{{ $loop->iteration }}
	{{ $elem }}
@endforeach -->

<!-- скольк итераций осталось -->
 @foreach ($arr as $elem)
	{{ $loop->remaining }}
	{{ $elem }}
@endforeach

	</body>
</html>
