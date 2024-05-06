@props([
    "size" => "base"
])

@php
    $classes = "transition-colors duration-300 bg-white/10 hover:bg-white/25 rounded-xl font-bold";

    if ($size === "base") {
        $classes .= ' px-5 py-1 text-base';
    }

    if ($size === "small") {
        $classes .= " px-3 py-1 text-2xs";
    }
@endphp

<a href="#" {{ $attributes(['class' => $classes]) }}>{{$slot}}</a>
