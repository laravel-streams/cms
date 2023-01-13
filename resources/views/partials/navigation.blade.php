<div class="w-full flex-grow lg:flex lg:items-center lg:w-auto hidden lg:block mt-2 lg:mt-0 bg-gray-100 md:bg-transparent z-20" id="nav-content">
    <ul class="list-reset lg:flex justify-end flex-1 items-center">
        @foreach (Streams::navigation()->get() as $item)
        <li class="mr-3">
            <a class="inline-block py-2 px-4 text-gray-900 {{ Request::url() == URL::to($item->url) ? 'font-bold' : null }} no-underline hover:underline" href="{{ $item->url }}" target="{{ $item->target ?: '_self' }}">{{ $item->title }}</a>
        </li>    
        @endforeach
    </ul>
</div>
