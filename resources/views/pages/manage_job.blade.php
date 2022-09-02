@extends('layout.pages-layout')
@section('pageTitle', isset($pageTitle) ? $pageTitle:'ادارة الوظائف')
@section('content')
<div class="py-[100px]">
    <x-card class="p-10 shadow-sm">
        <header>
            <h1 class="text-3xl text-center font-bold my-6 uppercase">
                ادارة الوظائف
            </h1>
        </header>

        <table class="w-full table-auto rounded-sm">
            <tbody>
                @unless($jobs->isEmpty())
                @foreach($jobs as $job)
                <tr class="border-gray-300">
                    <td class="px-4 py-8 border-t border-b border-gray-300 text-lg">
                        <a href="{{ route('job', ['job'=>$job->id]) }}"> {{$job->title}} </a>
                    </td>
                    <td class="px-4 py-8 border-t border-b border-gray-300 text-lg">
                        <a href="{{ route('edit', ['job'=>$job->id]) }}" class="text-blue-400 px-6 py-2 rounded-xl"><i
                                class="fa-solid fa-pen-to-square"></i>
                            تعديل</a>
                    </td>
                    <td class="px-4 py-8 border-t border-b border-gray-300 text-lg">
                        <form method="POST" action="{{ route('delete', ['job'=>$job->id]) }}">
                            @csrf
                            @method('DELETE')
                            <button class="text-red-500"><i class="fa-solid fa-trash"></i> مسح</button>
                        </form>
                    </td>
                </tr>
                @endforeach
                @else
                <tr class="border-gray-300">
                    <td class="px-4 py-8 border-t border-b border-gray-300 text-lg">
                        <p class="text-center">لا توجد وظيفة</p>
                    </td>
                </tr>
                @endunless

            </tbody>
        </table>
    </x-card>
</div>
@endsection
