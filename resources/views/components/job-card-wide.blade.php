@props(['job'])

<x-panel class="gap-6">
    <div>
        <x-employer-logo/>
    </div>


    <div class="flex-1 flex flex-col">
        <a href="#" class="self-start text-sm text-gray-400">{{ $job->employer->name }}</a>
        <h3 class="group-hover:text-blue-500 transition duration-300 text-lg font-bold mt-1">{{ $job->title }}</h3>
        <p class="text-sm mt-auto text-gray-400">{{ $job->schedule }} - {{ $job->salary }}</p>
    </div>

    <div class="items-center mt-auto space-x-2">
        @foreach($job->tags as $tag)
            <x-tag :$tag size="small"/>
        @endforeach
    </div>
</x-panel>
