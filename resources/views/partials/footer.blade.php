<footer class="bg-gray-100 mt-8">
    <div class="container max-w-4xl mx-auto flex py-8">

        <div class="w-full mx-auto flex flex-wrap">
            <div class="flex w-full md:w-1/2 ">
                <div class="px-8">
                    <div class="mt-2 wysiwyg-content">
                        {!! $variables->footer()->parse() !!}
                    </div>
                </div>
            </div>

            <div class="flex w-full md:w-1/2">
                <div class="px-8">
                    <h3 class="font-bold">Social</h3>
                    <ul class="text-sm pt-2">
                        <li>
                            <a class="py-1" href="{{ $variables->github_url }}" target="_blank">GitHub</a>
                        </li>
                        <li>
                            <a class="py-1"  href="{{ $variables->discord_url }}" target="_blank">Discord</a>
                        </li>
                        <li>
                            <a class="py-1" href="{{ $variables->twitter_url }}" target="_blank">Twitter</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

    </div>

    <div class="text-center py-4 text-sm">
        &copy; {{ date('Y') }} {{ config('app.name') }}. All rights reserved.
    </div>

</footer>
