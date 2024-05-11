<x-panel class="hover:border-white/5 max-w-xl  mx-auto">
    <form {{ $attributes(["class" => "max-w-xl w-full mx-16 mx-auto space-y-6", "method" => "GET"]) }}>
        @if ($attributes->get('method', 'GET') !== 'GET')
            @csrf
            @method($attributes->get('method'))
        @endif

        {{ $slot }}
    </form>
</x-panel>
