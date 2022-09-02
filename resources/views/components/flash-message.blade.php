@if (session()->has('message'))
<div x-data="{show:true}" x-init="setTimeout(()=> show = false,3000)" x-show="show"
    class="fixed top-20 transform bg-white px-8 py-3 text-laravel left-1/2 -translate-x-1/2 shadow-2xl rounded-md w-1/3 ring-1 ring-green-400">
    <p>
        {{session('message')}}
    </p>
</div>
@endif
