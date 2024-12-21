@props(['job'])

<x-panel class="flex gap-x-6">
    <div>
        <x-employer-logo :employer="$job->employer" width="100"/>
    </div>

    <div class="flex flex-1 flex-col">
        <a href="#" class="self-start text-sm text-gray-600">{{ $job->employer->name }}</a>
        <h3 class="text-lg font-bold transition-colors duration-300 group-hover:text-blue-600">
            <a href="{{$job->url}}" target="_blank">{{ $job->title }}</a>
        </h3>
        <p class="mt-auto text-sm text-gray-400">{{ $job->salary }}</p>
    </div>

    <div>
        @foreach($job->tags as $tag)
            <x-tag size="small" :$tag/>
        @endforeach
    </div>
</x-panel>
