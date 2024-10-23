@props(['job'])

<x-panel class="flex flex-col text-center">
    <p class="self-start text-sm">{{$job->employer->name}}</p>

    <div class="py-8">
        <h3 class="group-hover:text-blue-800 text-xl font-bold transition-colors duration-300">
            <a href="{{$job->url}}" target="_blank">
                {{$job->title}}
            </a>
        </h3>
        <p class="text-sm mt-4">{{$job->schedule}} - From {{$job->salary}}</p>
    </div>
    <div class="flex justify-between items-center mt-auto">
        <div>
            @foreach($job->tags as $tag)
                <x-tag size="small" :$tag/>
            @endforeach
        </div>

        <div>
            <x-employer-logo :employer="$job->employer"/>
        </div>
    </div>
</x-panel>
