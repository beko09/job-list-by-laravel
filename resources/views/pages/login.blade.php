@extends('layout.auth-layout')
@section('pageTitle', isset($pageTitle) ? $pageTitle:'دخول')
@section('content')
<a href="{{ route('home')}}" class="flex flex-row items-center gap-1 text-black px-2 mb-4 max-w-lg mx-auto"><i
        class="fa fa-angle-right"></i>
    <span>رجوع</span>
</a>
<x-card class="p-5 lg:p-10 max-w-lg mx-auto  shadow-xl">

    <header class="text-center">
        <h2 class="text-2xl font-bold uppercase mb-1">دخول</h2>
        <p class="mb-4">ادخل الي حسابك لنشر فرصة جديدة</p>
    </header>

    <form method="POST" action="{{ route('authenticate') }}" class="flex flex-col gap-4 lg:px-10">
        @csrf

        <div class="">
            <label for="email" class="inline-block text-lg mb-2">الايميل
            </label>
            <input type="email" class="input-form" name="email" value="{{old('email')}}" />

            @error('email')
            <p class="error-message">{{$message}}</p>
            @enderror
        </div>

        <div class="">
            <label for="password" class="inline-block text-lg mb-2">
                كلمة السر
            </label>
            <input type="password" class="input-form" name="password" value="{{old('password')}}" />

            @error('password')
            <p class="error-message">{{$message}}</p>
            @enderror
        </div>

        <div class="w-full">
            <button type="submit" class="btn-send">
                دخول
            </button>
        </div>

        <div class="mt-8">
            <p>
                ليس لديك حساب ؟
                <a href="/register" class="other-link">تسجيل</a>
            </p>
        </div>
    </form>
</x-card>
@endsection
