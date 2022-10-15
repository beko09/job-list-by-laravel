@extends('layout.pages-layout')
@section('pageTitle', isset($pageTitle) ? $pageTitle:$job->title)
@section('hero')
@include('partials._hero')
@endsection
@section('content')


<div class="py-[100px] grid grid-cols-1 lg:grid-cols-4 gap-3">
    <div class="col-span-3">
        <x-card class="shadow-none ">
            <div class="flex flex-row gap-4">
                @if ($job->logo)
                <a href="{{ route('job', ['job'=>$job->id]) }}">
                    <img class="h-[100px] w-[100px] rounded-lg md:block" src="{{ asset('storage/' . $job->logo) }}"
                        alt="no" />
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
        <x-card class="p-10 shadow-sm">
            <div class="border border-gray-200 w-full mb-6"></div>
            <div>
                <h3 class="text-3xl font-bold mb-4">
                    وصف الوظفية
                </h3>
                <div class="text-lg space-y-6">
                    <p>
                        {{$job->description}}
                    </p>

                    <h1 class="pt-4">للتواصل :</h1>
                    <div class="flex flex-row gap-4">
                        <a href="mailto: {{$job->email}}" class="block"><i class="fa-solid fa-envelope"></i>
                            التواصل بالايميل</a>

                        <a href="{{$job->website}}" target="_blank" class="block"><i class="fa-solid fa-globe"></i>
                            زيارة الموقع</a>
                    </div>

                </div>
            </div>
        </x-card>
    </div>
    <x-card class=" col-span-1 shadow-none">
        <div class=" p-3 shadow-md">
            <h1 class="text-xl text-bold font-samsungs"> نظرة عامة على الوظيفة :</h1>
            <ul class="mt-4 p-3">
                <li class="job-single-d">
                    تاريخ النشر
                    <span>{{$job->created_at->format('d/m/Y')}}</span>
                </li>
                <li class="job-single-d">
                    الموقع
                    <span>{{$job->location}}</span>
                </li>
                <li class="job-single-d">
                    عدد الوظائف الشاغرة
                    <span>{{$job->vacancy}}</span>
                </li>
                <li class="job-single-d">
                    طبيعة العمل
                    <span>{{$job->jobNature}}</span>
                </li>
                <li class="job-single-d">
                    الراتب
                    <span>
                        {{$job->salary}}
                        $
                    </span>
                </li>

            </ul>
        </div>
    </x-card>
</div>

@endsection
