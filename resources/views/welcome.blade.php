<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
	@include('partials.head')
</head>

<body class="antialiased bg-gray-100 font-sans leading-normal tracking-normal">

	@include('partials.header')

	<div class="container w-full md:max-w-3xl mx-auto pt-20">

		@include('partials.cp_link', ['href' => '/cp/posts'])

		@foreach (Streams::posts()->orderBy('publish_at', 'DESC')->get() as $post)
		<!--Title-->
		<div class="font-sans">
			<h2 class="font-bold font-sans break-normal text-gray-900 pt-6 pb-2">
				<a class="text-3xl md:text-4xl hover:underline" href="/post/{{ $post->id }}">{{ $post->title }}</a>
			</h1>
			<p class="text-sm md:text-base font-normal text-gray-600">Published {{ $post->publish_at->format('j F Y') }}</p>
			@if ($post->intro)	
			<p class="py-6">
				{{ $post->intro }}
			</p>
			@endif
			
			@include('partials.divider')

		</div>
		@endforeach

		<div class="mb-24"></div>

	</div>

	@include('partials.footer')
	@include('partials.assets')

</body>

</html>
