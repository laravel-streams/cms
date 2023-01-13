<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    @include('partials.head')
</head>

<body class="antialiased bg-gray-100 font-sans leading-normal tracking-normal">

	@include('partials.header')

	<div class="container w-full min-h-screen md:max-w-3xl mx-auto pt-20">

		<ul class="my-20">
			@foreach (Streams::posts()->get() as $post)
			<li>
				<a href="{{ URL::to('post/' . $post->id) }}">{{ $post->title }}</a>
			</li>
			@endforeach
		</ul>

	</div>

	@include('partials.footer')
	@include('partials.assets')

</body>

</html>
