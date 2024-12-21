<x-layout>
    <div class="space-y-10">
        <section class="pt-6 text-center">
            <h1 class="text-4xl font-bold">Let's find your next Job</h1>


{{--            <form action="" class="mt-6">--}}
{{--                <input--}}
{{--                    class="w-full max-w-md rounded-xl border border-white/10 bg-white/5 px-5 py-4"--}}
{{--                    type="text" placeholder="Web developer...">--}}
{{--            </form>--}}

            <x-forms.form action="/search">
                <x-forms.input :label="false" name="q" placeholder="Web Developer..."/>
            </x-forms.form>
        </section>

        <section class="pt-10">
            <x-section-heading>Top Jobs</x-section-heading>

            <div class="mt-6 grid gap-8 lg:grid-cols-3">
                @foreach($featuredJobs as $job)
                    <x-job-card :$job/>
                @endforeach
            </div>
        </section>

        <section>
            <x-section-heading>Tags</x-section-heading>

            <div class="mt-6 flex flex-wrap gap-2">
                @foreach($tags as $tag)
                    <x-tag :$tag/>
                @endforeach
            </div>
        </section>

        <section>
            <x-section-heading>Recent Jobs</x-section-heading>


            <div class="mt-6 space-y-6">
                @foreach($jobs as $job)
                    <x-job-card-wide :job="$job"/>
                @endforeach
            </div>
        </section>
    </div>
</x-layout>
