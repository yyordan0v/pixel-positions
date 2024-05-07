@props(['job'])

<x-panel class="flex-col text-center">
    <div class="self-start text-sm">
        <a href="#">{{ $job->employer->name }}</a>
    </div>

    <div class="py-8">
        <h3 class="group-hover:text-blue-500 transition duration-300 text-lg font-bold">{{ $job->title }}</h3>
        <p class="text-sm mt-6 text-gray-400">{{ $job->schedule }} - {{ $job->salary }}</p>
    </div>

    <div class="flex justify-between items-center mt-auto">
        <div class="space-x-1">
            @foreach($job->tags as $tag)
                <x-tag :$tag size="small"/>
            @endforeach
        </div>
        <div>
            <x-employer-logo :width="42"/>
        </div>
    </div>
</x-panel>
