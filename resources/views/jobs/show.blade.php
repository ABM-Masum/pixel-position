<x-layout>
    <div class="flex flex-col p-4 bg-white/5 rounded-xl space-y-6 items-center">
        <div class="flex items-center space-x-2">
            <div>
                <x-employer-logo :employer="$job->employer" width="60"/>
            </div>
            <p class="text-4xl font-bold">{{$job->employer->name}}</p>
        </div>

        <div class="self-start space-y-6">
            <h3 class="text-xl space-x-1">
                <i><b>Position:</b></i>
                <a class="hover:text-blue-800 text-xl transition-colors duration-300"
                   href="{{$job->url}}"
                   target="_blank">
                    {{$job->title}}
                </a>
            </h3>

            <div class="space-y-2">
                <h3 class="italic font-bold text-lg">Job Description:</h3>
                <p>{{ $job->description }}</p>
            </div>

            <p class="text-sm"><i><b>Job Type:</b></i> &nbsp; {{$job->schedule}}</p>

            <p class="text-sm"><i><b>Salary:</b></i> &nbsp; {{$job->salary}}</p>

            <div class="flex space-x-2">
                @foreach($job->tags as $tag)
                    <x-tag size="small" :$tag/>
                @endforeach
            </div>

            <p class="mt-auto">
                <i><b>Apply Here:-</b></i>

                <a href="{{$job->url}}" target="_blank" class="text-blue-600">
                    <u>{{ $job->url }}</u>
                </a>
            </p>
        </div>
    </div>
</x-layout>

