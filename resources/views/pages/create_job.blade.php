@extends('layout.pages-layout')
@section('pageTitle', isset($pageTitle) ? $pageTitle:'انشاء وظيفة')
@section('content')
<div class="py-[100px]">
    <x-card class=" p-5 lg:p-10  mx-auto  shadow-sm">
        <header class="text-center mb-8">
            <h2 class="text-2xl font-bold uppercase mb-4">
                انشاء وظيفة
            </h2>
            <p class="">انشر وظيفة لكل تحقق فرصة للاخرين</p>
        </header>

        <form method="POST" action="{{ route('store') }}" enctype="multipart/form-data"
            class=" grid grid-cols-1 lg:grid-cols-2 gap-4 lg:px-10 w-full">
            @csrf
            <div class="mb-6">
                <label for="company" class="inline-block text-lg mb-2"> اسم الشركة</label>
                <input type="text" class="input-form" name="company" value="{{old('company')}}" />
                @error('company')
                <p class="error-message">{{$message}}</p>
                @enderror
            </div>

            <div class="mb-6">
                <label for="title" class="inline-block text-lg mb-2">وصف الوظيفة</label>
                <input type="text" class="input-form" name="title" placeholder="مثلا: مطور واجهة امامية"
                    value="{{old('title')}}" />
                @error('title')
                <p class="error-message">{{$message}}</p>
                @enderror
            </div>

            <div class="mb-6">
                <label for="location" class="inline-block text-lg mb-2">موقع الوظيفة</label>
                <input type="text" class="input-form" name="location" placeholder="مثلا: السعودية, الامارات"
                    value="{{old('location')}}" />
                @error('location')
                <p class="error-message">{{$message}}</p>
                @enderror
            </div>

            <div class="mb-6">
                <label for="email" class="inline-block text-lg mb-2">ايميل التواصل</label>
                <input type="text" class="input-form" name="email" value="{{old('email')}}" />
                @error('email')
                <p class="error-message">{{$message}}</p>
                @enderror
            </div>
            <div class="mb-6">
                <label for="salary" class="inline-block text-lg mb-2">الراتب</label>
                <input type="number" class="input-form" name="salary" value="{{old('salary')}}" />
                @error('salary')
                <p class="error-message">{{$message}}</p>
                @enderror
            </div>
            <div class="mb-6">
                <label for="jobNature" class="inline-block text-lg mb-2">طبيعة العمل</label>
                <input type="text" class="input-form" name="jobNature" value="{{old('jobNature')}}" />
                @error('jobNature')
                <p class="error-message">{{$message}}</p>
                @enderror
            </div>
            <div class="mb-6">
                <label for="vacancy" class="inline-block text-lg mb-2">عدد الوظائف الشاغرة</label>
                <input type="number" class="input-form" name="vacancy" value="{{old('vacancy')}}" />
                @error('vacancy')
                <p class="error-message">{{$message}}</p>
                @enderror
            </div>

            <div class="mb-6">
                <label for="website" class="inline-block text-lg mb-2">
                    رابط الموقع
                </label>
                <input type="text" class="input-form" name="website" value="{{old('website')}}" />
                @error('website')
                <p class="error-message">{{$message}}</p>
                @enderror
            </div>

            <div class="mb-6">
                <label for="tags" class="inline-block text-lg mb-2">
                    الوسوم (افصل بينهم بالفاصلة [,])
                </label>
                <input type="text" class="input-form" name="tags" placeholder="مثلا مصمم,مطور تطبيقات,ux&ui"
                    value="{{old('tags')}}" />
                @error('tags')
                <p class="error-message">{{$message}}</p>
                @enderror
            </div>

            <div class="mb-6">
                <label for="logo" class="inline-block text-lg mb-2">
                    شعار الشركة
                </label>
                <input type="file" class="input-form" name="logo" />
                @error('logo')
                <p class="error-message">{{$message}}</p>
                @enderror
            </div>

            <div class="mb-6">
                <label for="description" class="inline-block text-lg mb-2">
                    وصف الوظيفة
                </label>
                <textarea class="input-form" name="description" rows="1" placeholder="تتضمن المهام والمطلوبات">
                        {{old('description')}}
                        </textarea>
                @error('description')
                <p class="error-message">{{$message}}</p>
                @enderror
            </div>

            <div>
                <button class="btn-send">
                    نشر الوظيفة
                </button>

            </div>
        </form>
    </x-card>
</div>
@endsection
