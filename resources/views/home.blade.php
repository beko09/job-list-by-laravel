@extends('layout.pages-layout')
@section('pageTitle', isset($pageTitle) ? $pageTitle:'الرئيسية')
@section('hero')
@include('partials._hero')
@endsection
@section('content')
@include('partials._search')
@unless (count($jobs) == 0)
<div class="lg:grid lg:grid-cols-3 gap-4 py-[100px]">
    @foreach ($jobs as $job)
    <x-job-card :job="$job" />
    @endforeach
</div>
@else
<p class="text-center text-xl font-samsungs py-24">لا توجد وظائف</p>
@endunless
<div class="mt-6 p-4">
    {{$jobs->links()}}
</div>
@endsection
