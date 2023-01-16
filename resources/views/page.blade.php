<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
	@include('partials.head')
</head>

<body class="antialiased bg-gray-100 font-sans leading-normal tracking-normal">

	@include('partials.header')

	<div class="container w-full md:max-w-3xl mx-auto pt-20">

		<div class="w-full px-4 md:px-6 text-gray-800" style="font-family:Georgia,serif;">
			<div class="wysiwyg-content">
				{!! View::parse(Str::markdown($entry->body)) !!}
			</div>
		</div>

		<div class="mb-24"></div>

	</div>

	@include('partials.footer')
	@include('partials.assets')

</body>

</html>
