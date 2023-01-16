<div class="text-base md:text-sm text-gray-500 px-4 py-6">
    @if ($entry->tags)
    Tags: 
    @foreach ($entry->tags as $tag)
    <a href="#{{ $tag }}" class="text-base md:text-sm text-green-500 no-underline hover:underline">{{ $tag }}</a>{{ $loop->last ? '' : ','}}
    @endforeach
    @endif	
</div>
