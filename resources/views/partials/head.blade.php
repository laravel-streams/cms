<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<title>{{ implode(' | ', array_filter([
    $metaTitle ?? null,
    config('app.name')
])) }}</title>

<link rel="icon" type="image/png" href="favicon.png"/>

@php
View::share('variables', Streams::repository('variables')->find('default'));
@endphp
