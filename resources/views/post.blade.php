<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

@php
View::share('metaTitle', $entry->meta_title ?: $entry->title);
@endphp

<head>
	@include('partials.head')
</head>

<body class="antialiased bg-gray-100 font-sans leading-normal tracking-normal">

	@include('partials.header')

	<div class="container w-full md:max-w-3xl mx-auto pt-20">

		<article class="wysiwyg-content w-full px-4 md:px-6 text-xl text-gray-800 leading-normal"
			style="font-family:Georgia,serif;">

			<!--Title-->
			<div class="font-sans">
				<p class="text-base md:text-sm text-green-500 font-bold">
					&lt; <a href="/"
						class="text-base md:text-sm text-green-500 font-bold no-underline hover:underline">BACK TO
						BLOG</a>
				</p>
				<h1 class="font-bold font-sans break-normal text-gray-900 pt-6 pb-2 text-3xl md:text-4xl">{{
					$entry->title }}</h1>
				<p class="text-sm md:text-base font-normal text-gray-600">Published {{ $entry->publish_at->format('j F
					Y') }}</p>
			</div>

			<div class="wysiwyg-content">
				{!! $entry->body()->parse() !!}
			</div>

		</article>

		@include('partials.tags')

		@include('partials.divider')

		<!--Author-->
		<div class="flex w-full items-center font-sans px-4 py-8">
			<img class="w-10 h-10 rounded-full mr-4" src="{{ URL::asset('storage/me2.jpeg') }}" alt="Ryan Thompson">
			<div class="flex-1 px-2">
				<p class="text-base font-bold text-base md:text-xl leading-none mb-2">
					{{ $entry->author }}
				</p>
				<p class="text-gray-600 text-xs md:text-base">{{ $entry->author_text }}</p>
			</div>
			<div class="justify-end">
				<a href="{{ $entry->author_url }}" target="_blank"
					class="bg-transparent border border-gray-500 hover:border-green-500 text-xs text-gray-500 hover:text-green-500 font-bold py-2 px-4 rounded-full">Read
					More</a>
			</div>
		</div>
		<!--/Author-->

		@include('partials.subscribe')

		{{-- @include('partials.divider') --}}

		<!--Next & Prev Links-->
		{{-- <div class="font-sans flex justify-between content-center px-4 pb-12">
			<div class="text-left">
				<span class="text-xs md:text-sm font-normal text-gray-600">&lt; Previous Post</span><br>
				<p><a href="#"
						class="break-normal text-base md:text-sm text-green-500 font-bold no-underline hover:underline">Blog
						title</a></p>
			</div>
			<div class="text-right">
				<span class="text-xs md:text-sm font-normal text-gray-600">Next Post &gt;</span><br>
				<p><a href="#"
						class="break-normal text-base md:text-sm text-green-500 font-bold no-underline hover:underline">Blog
						title</a></p>
			</div>
		</div> --}}
		<!--/Next & Prev Links-->

	</div>
	<!--/container-->

	@include('partials.footer')
	@include('partials.assets')

</body>

</html>
