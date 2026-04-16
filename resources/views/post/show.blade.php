<!DOCTYPE html>
<html>

<head>
	<x-layout>
		@foreach ($posts as $post)
		<div>
			<h2>{{ $post->title }}</h2>
			<div>
				{{ $post->text }}
			</div>
		</div>
		@endforeach
	</x-layout>

</head>

<body>

</body>

</html>