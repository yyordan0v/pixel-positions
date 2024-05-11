@props(['employer', 'width' => 90])

<img src="{{ asset('storage/' . $employer->logo) }}" alt="Company Logo"
     class="rounded-xl"
     width="{{ $width }}"
>
