@php
    $classes = 'p-4 bg-white/5 rounded-xl flex border border-white/5 hover:border-blue-500 transition duration-300 group';
@endphp

<div {{ $attributes(['class' => $classes]) }}>
    {{ $slot }}
</div>
