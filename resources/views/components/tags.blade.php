@props(['tags'])
<ul class="flex flex-row gap-4 mt-4">
    @foreach (explode(',' ,$tags) as $tag)
    <li class="bg-yellow-500 text-laravel rounded-xl text-sm px-2 py-1 ">
        <a href="{{ route('home', ['tag'=>$tag]) }}">{{$tag}}</a>
    </li>
    @endforeach
</ul>
