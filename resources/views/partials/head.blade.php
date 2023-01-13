<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<title>{{ config('app.name') }}</title>

<!-- Fonts -->
<link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

<!-- Favicon -->
<link rel="icon" type="image/png" href="favicon.png" />

@vite(['resources/js/app.js'])

@php
View::share('variables', Streams::repository('variables')->find('default'));
@endphp
