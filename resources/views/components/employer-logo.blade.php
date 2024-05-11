@props(['employer', 'width' => 90])

<img src="{{ asset('storage/' . $employer->logo) }}" alt="Company Logo"
     class="rounded-xl w-[{{ $width}}px] h-[{{ $width}}px]"
     width="{{ $width }}"
     height="{{ $width }}">
