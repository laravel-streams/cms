<nav id="header" class="mb-12">

    <div class="max-w-4xl mx-auto flex flex-wrap items-center justify-between py-3">

        <div class="pl-5">
            <a class="font-bold text-xl" href="/">
                <img class="w-12" src="{!! Assets::url('storage/logo.svg') !!}" alt="{{ config('app.name') }} Logo">
                <span class="sr-only">{{ config('app.name') }}</span>
            </a>
        </div>

        <div class="block lg:hidden pr-4">
            <button class="flex items-center px-3 py-2">
                <svg class="h-3 w-3" viewBox="0 0 20 20">
                    <title>Menu</title>
                    <path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z"/>
                </svg>
            </button>
        </div>

        @include('partials.navigation')
    </div>
</nav>
