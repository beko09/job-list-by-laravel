@props(['job'])

<x-card class="my-10">
    <div class="flex flex-row gap-4">
        @if ($job->logo)
        <a href="{{ route('job', ['job'=>$job->id]) }}">
            <img class="h-[100px] w-[100px] rounded-lg md:block" src="{{ asset('storage/' . $job->logo) }}" alt="no" />
        </a>
        @endif
        <div>
            <h3 class="text-2xl">
                <a href="{{ route('job', ['job'=>$job->id]) }}">{{$job->title}}</a>
            </h3>
            <div class="flex flex-col  gap-2 justify-center">
                <p class="text-lg font-bold mt-1 text-[#0000005c]">{{$job->company}}</p>

                <div class="text-sm text-[#c39210]">
                    <i class="fa-solid fa-location-dot"></i>
                    {{$job->location}}
                </div>
            </div>
        </div>

    </div>
    <div class="my-2">
        <x-tags :tags="$job->tags" />
    </div>
</x-card>
