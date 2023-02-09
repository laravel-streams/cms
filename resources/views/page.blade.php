<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
	@include('partials.head')
</head>

<body class="antialiased">

	@include('partials.header')

	<div class="container max-w-4xl px-8 mx-auto">
		<div class="wysiwyg-content">
			{!! View::parse($entry->body) !!}
		</div>
	</div>

	@include('partials.footer')
	@include('partials.assets')

</body>
</html>
