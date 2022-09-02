@extends('layout.pages-layout')
@section('pageTitle', isset($pageTitle) ? $pageTitle:$job->title)
@section('content')
<div class="py-[100px]">
    <x-card class="p-5 lg:p-10  mx-auto  shadow-sm">
        <header class="text-center">
            <h2 class="text-2xl font-bold uppercase mb-1">تعديل الوظيفة</h2>
            <p class="mb-4">تعديل: {{$job->title}}</p>
        </header>

        <form method="POST" action="{{ route('job', ['job'=>$job->id]) }}" enctype="multipart/form-data"
            class="grid grid-cols-1 grid-cols-2 gap-4 lg:px-10 w-full">
            @csrf
            @method('PUT')
            <div class="mb-6">
                <label for="company" class="inline-block text-lg mb-2">اسم الشركة </label>
                <input type="text" class="input-form" name="company" value="{{$job->company}}" />

                @error('company')
                <p class="error-message">{{$message}}</p>
                @enderror
            </div>

            <div class="mb-6">
                <label for="title" class="inline-block text-lg mb-2">اسم الوظيفة</label>
                <input type="text" class="input-form" name="title" placeholder="Example: Senior Laravel Developer"
                    value="{{$job->title}}" />

                @error('title')
                <p class="error-message">{{$message}}</p>
                @enderror
            </div>

            <div class="mb-6">
                <label for="location" class="inline-block text-lg mb-2">موقع الوظيفة</label>
                <input type="text" class="input-form" name="location" placeholder="Example: Remote, Boston MA, etc"
                    value="{{$job->location}}" />

                @error('location')
                <p class="error-message">{{$message}}</p>
                @enderror
            </div>

            <div class="mb-6">
                <label for="email" class="inline-block text-lg mb-2">
                    ايميل التواصل
                </label>
                <input type="text" class="input-form" name="email" value="{{$job->email}}" />

                @error('email')
                <p class="error-message">{{$message}}</p>
                @enderror
            </div>

            <div class="mb-6">
                <label for="salary" class="inline-block text-lg mb-2">الراتب</label>
                <input type="number" class="input-form" name="salary" value="{{$job->salary}}" />
                @error('salary')
                <p class="error-message">{{$message}}</p>
                @enderror
            </div>
            <div class="mb-6">
                <label for="jobNature" class="inline-block text-lg mb-2">طبيعة العمل</label>
                <input type="text" class="input-form" name="jobNature" value="{{$job->jobNature}}" />
                @error('jobNature')
                <p class="error-message">{{$message}}</p>
                @enderror
            </div>
            <div class="mb-6">
                <label for="vacancy" class="inline-block text-lg mb-2">عدد الوظائف الشاغرة</label>
                <input type="number" class="input-form" name="vacancy" value="{{$job->vacancy}}" />
                @error('vacancy')
                <p class="error-message">{{$message}}</p>
                @enderror
            </div>
            <div class="mb-6">
                <label for="website" class="inline-block text-lg mb-2">
                    رابط الموقع
                </label>
                <input type="text" class="input-form" name="website" value="{{$job->website}}" />

                @error('website')
                <p class="error-message">{{$message}}</p>
                @enderror
            </div>

            <div class="mb-6">
                <label for="tags" class="inline-block text-lg mb-2">
                    الوسوم (افصل بينهم بالفاصلة [,])
                </label>
                <input type="text" class="input-form" name="tags" placeholder="Example: Laravel, Backend, Postgres, etc"
                    value="{{$job->tags}}" />

                @error('tags')
                <p class="error-message">{{$message}}</p>
                @enderror
            </div>

            <div class="mb-6">
                <label for="logo" class="inline-block text-lg mb-2">
                    شعار الشركة
                </label>
                <input type="file" class="input-form" name="logo" />
                @if ($job->logo)
                <img class="w-48  my-6" src="{{ asset('storage/' . $job->logo)}}" alt="" />
                @endif

                @error('logo')
                <p class="error-message">{{$message}}</p>
                @enderror
            </div>

            <div class="mb-6">
                <label for="description" class="inline-block text-lg mb-2">
                    وصف الوظيفة
                </label>
                <textarea class="input-form" name="description" rows="1"
                    placeholder="تتضمن المهام والمطلوبات">{{$job->description}}</textarea>

                @error('description')
                <p class="error-message">{{$message}}</p>
                @enderror
            </div>

            <div class="w-full">
                <button class="bg-laravel text-white rounded py-2 px-4 hover:bg-black">
                    تعديل الوظيفة
                </button>
            </div>
        </form>
    </x-card>
</div>
@endsection
