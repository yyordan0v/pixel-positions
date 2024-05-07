<x-layout>
    <div class="space-y-10">
        <section class="text-center pt-10">
            <h1 class="font-bold text-4xl">Let's Find You A Great Job</h1>

            <form action="">
                <div class="relative mt-10 rounded-md shadow-sm w-full max-w-2xl mx-auto">
                    <div class="pointer-events-none absolute inset-y-0 right-6 flex items-center pl-3">
                        <span class="w-4 h-4 bg-white"></span>
                    </div>
                    <input type="text"
                           class="block w-full rounded-xl py-4 px-5 bg-white/5 border border-white/10"
                           placeholder="I'm looking for...">
                </div>
            </form>
        </section>

        <section class="pt-20">
            <x-section-heading>Featured Jobs</x-section-heading>
            <div class="grid lg:grid-cols-3 gap-6">
                @foreach($featuredJobs as $job)
                    <x-job-card :$job/>
                @endforeach
            </div>
        </section>

        <section>
            <x-section-heading>Tags</x-section-heading>

            <div class="space-x-2">
                @foreach($tags as $tag)
                    <x-tag :$tag/>
                @endforeach
            </div>
        </section>

        <section>
            <x-section-heading>Recent Jobs</x-section-heading>

            <div class="space-y-6">
                @foreach($jobs as $job)
                    <x-job-card-wide :$job/>
                @endforeach
            </div>
        </section>
    </div>
</x-layout>
