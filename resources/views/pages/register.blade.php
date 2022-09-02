@extends('layout.auth-layout')
@section('pageTitle', isset($pageTitle) ? $pageTitle:'سجل حسابا')
@section('content')
<a href="{{ route('home')}}" class="flex flex-row items-center gap-1 text-black px-2 mb-4 max-w-lg mx-auto"><i
        class="fa fa-angle-right"></i>
    <span>رجوع</span>
</a>
<x-card class="p-5 lg:p-10 max-w-lg mx-auto  shadow-xl ">
    <header class="text-center">
        <h2 class="text-2xl font-bold uppercase mb-1">تسجيل</h2>
        <p class="mb-4">انشئ حساب مجانا في فرصة</p>
    </header>

    <form method="POST" action="{{ route('users') }}" class="flex flex-col gap-4 lg:px-10">
        @csrf
        <div class="">
            <label for="name" class="inline-block text-lg mb-2"> الاسم </label>
            <input type="text" class="input-form" name="username" value="{{old('username')}}"
                placeholder="اسم المستخدم ..." />

            @error('username')
            <p class="error-message">{{$message}}</p>
            @enderror
        </div>

        <div class="">
            <label for="email" class="inline-block text-lg mb-2">الايميل</label>
            <input type="email" class="input-form" name="email" value="{{old('email')}}"
                placeholder="بريدك الالكتروني..." />

            @error('email')
            <p class="error-message">{{$message}}</p>
            @enderror
        </div>

        <div class="">
            <label for="password" class="inline-block text-lg mb-2">
                كلمة السر
            </label>
            <input type="password" class="input-form" name="password" value="{{old('password')}}"
                placeholder="كلمة السر..." />

            @error('password')
            <p class="error-message">{{$message}}</p>
            @enderror
        </div>

        <div class="">
            <label for="password2" class="inline-block text-lg mb-2">
                تاكيد كلمة السر
            </label>
            <input type="password" class="input-form" name="password_confirmation"
                value="{{old('password_confirmation')}}" placeholder="تاكيد كلمة السر..." />

            @error('password_confirmation')
            <p class="error-message">{{$message}}</p>
            @enderror
        </div>

        <div class="w-full">
            <button type="submit" class="btn-send">
                تسجيل
            </button>
        </div>

        <div class="py-6">
            <p>
                هل لديك حساب مسبقا ؟
                <a href="/login" class="other-link">دخول</a>
            </p>
        </div>
    </form>
</x-card>
@endsection
