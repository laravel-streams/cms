<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
	@include('partials.head')
</head>

<body class="antialiased bg-gray-100 font-sans leading-normal tracking-normal">

	@include('partials.header')

	<div class="container w-full md:max-w-3xl mx-auto pt-20">

		<div class="w-full px-4 md:px-6 text-xl text-gray-800 leading-normal" style="font-family:Georgia,serif;">

			{!! $entry->body()->parse() !!}

		</div>

		<!--Tags -->
		<div class="text-base md:text-sm text-gray-500 px-4 py-6">
			Tags: <a href="#" class="text-base md:text-sm text-green-500 no-underline hover:underline">Link</a> . <a
				href="#" class="text-base md:text-sm text-green-500 no-underline hover:underline">Link</a>
		</div>

		<!--Divider-->
		<hr class="border-b-2 border-gray-400 mb-8 mx-4">

		<!--Subscribe-->
		<div class="container px-4">
			<div class="font-sans bg-gradient-to-b from-green-100 to-gray-100 rounded-lg shadow-xl p-4 text-center">
				<h2 class="font-bold break-normal text-xl md:text-3xl">Subscribe to my Newsletter</h2>
				<h3 class="font-bold break-normal text-gray-600 text-sm md:text-base">Get the latest posts delivered
					right to your inbox</h3>
				<div class="w-full text-center pt-4">
					<form action="#">
						<div class="max-w-xl mx-auto p-1 pr-0 flex flex-wrap items-center">
							<input type="email" placeholder="youremail@example.com"
								class="flex-1 mt-4 appearance-none border border-gray-400 rounded shadow-md p-3 text-gray-600 mr-2 focus:outline-none">
							<button type="submit"
								class="flex-1 mt-4 block md:inline-block appearance-none bg-green-500 text-white text-base font-semibold tracking-wider uppercase py-4 rounded shadow hover:bg-green-400">Subscribe</button>
						</div>
					</form>
				</div>
			</div>
		</div>
		<!-- /Subscribe-->

		<!--Author-->
		<div class="flex w-full items-center font-sans px-4 py-12">
			<img class="w-10 h-10 rounded-full mr-4" src="http://i.pravatar.cc/300" alt="Avatar of Author">
			<div class="flex-1 px-2">
				<p class="text-base font-bold text-base md:text-xl leading-none mb-2">Jo Bloggerson</p>
				<p class="text-gray-600 text-xs md:text-base">Minimal Blog Tailwind CSS template by <a
						class="text-green-500 no-underline hover:underline"
						href="https://www.tailwindtoolbox.com">TailwindToolbox.com</a></p>
			</div>
			<div class="justify-end">
				<button
					class="bg-transparent border border-gray-500 hover:border-green-500 text-xs text-gray-500 hover:text-green-500 font-bold py-2 px-4 rounded-full">Read
					More</button>
			</div>
		</div>
		<!--/Author-->

		<!--Divider-->
		<hr class="border-b-2 border-gray-400 mb-8 mx-4">

		<!--Next & Prev Links-->
		<div class="font-sans flex justify-between content-center px-4 pb-12">
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
		</div>

		<!--/Next & Prev Links-->

	</div>
	<!--/container-->

	<footer class="bg-white border-t border-gray-400 shadow">
		<div class="container max-w-4xl mx-auto flex py-8">

			<div class="w-full mx-auto flex flex-wrap">
				<div class="flex w-full md:w-1/2 ">
					<div class="px-8">
						<h3 class="font-bold text-gray-900">About</h3>
						<p class="py-4 text-gray-600 text-sm">
							Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas vel mi ut felis tempus
							commodo nec id erat. Suspendisse consectetur dapibus velit ut lacinia.
						</p>
					</div>
				</div>

				<div class="flex w-full md:w-1/2">
					<div class="px-8">
						<h3 class="font-bold text-gray-900">Social</h3>
						<ul class="list-reset items-center text-sm pt-3">
							<li>
								<a class="inline-block text-gray-600 no-underline hover:text-gray-900 hover:text-underline py-1"
									href="#">Add social link</a>
							</li>
							<li>
								<a class="inline-block text-gray-600 no-underline hover:text-gray-900 hover:text-underline py-1"
									href="#">Add social link</a>
							</li>
							<li>
								<a class="inline-block text-gray-600 no-underline hover:text-gray-900 hover:text-underline py-1"
									href="#">Add social link</a>
							</li>
						</ul>
					</div>
				</div>
			</div>

		</div>
	</footer>

	<script>
		/* Progress bar */
		//Source: https://alligator.io/js/progress-bar-javascript-css-variables/
		var h = document.documentElement,
			b = document.body,
			st = 'scrollTop',
			sh = 'scrollHeight',
			progress = document.querySelector('#progress'),
			scroll;
		var scrollpos = window.scrollY;
		var header = document.getElementById("header");
		var navcontent = document.getElementById("nav-content");

		document.addEventListener('scroll', function() {

			/*Refresh scroll % width*/
			scroll = (h[st] || b[st]) / ((h[sh] || b[sh]) - h.clientHeight) * 100;
			progress.style.setProperty('--scroll', scroll + '%');

			/*Apply classes for slide in bar*/
			scrollpos = window.scrollY;

			if (scrollpos > 10) {
				header.classList.add("bg-white");
				header.classList.add("shadow");
				navcontent.classList.remove("bg-gray-100");
				navcontent.classList.add("bg-white");
			} else {
				header.classList.remove("bg-white");
				header.classList.remove("shadow");
				navcontent.classList.remove("bg-white");
				navcontent.classList.add("bg-gray-100");

			}

		});


		//Javascript to toggle the menu
		document.getElementById('nav-toggle').onclick = function() {
			document.getElementById("nav-content").classList.toggle("hidden");
		}
	</script>

</body>

</html>
