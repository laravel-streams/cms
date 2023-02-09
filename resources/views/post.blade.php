<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

@php
View::share('metaTitle', $entry->meta_title ?: $entry->title);
@endphp

<head>
	@include('partials.head')
</head>

<body class="antialiased">

	@include('partials.header')

	<div class="container max-w-4xl px-8 mx-auto">

		<article class="wysiwyg-content text-xl">

			<h1 class="font-bold break-normal text-4xl">
				{{ $entry->title }}
			</h1>
			
			<p class="text-sm md:text-base text-gray-500 mb-8">
				Published {{ $entry->publish_at->format('j F Y') }}
			</p>

			{!! $entry->body()->parse() !!}

		</article>

	</div>

	@include('partials.footer')
	@include('partials.assets')

</body>
</html>
