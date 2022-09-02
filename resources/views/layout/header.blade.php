<nav class="header">
    <a href="{{ route('home') }}" class="inline-block">
        <h1 class="logo">فُرصَ <span class="text-yellow-500 text-lg font-semibold">ة</span></h1>
    </a>
    <ul class="menu">
        @auth
        <li class="item-menu">
            <a href="{{ route('create') }}" class="bg-black p-3 text-white">
                نشر وظيفة</a>
        </li>
        <li class="item-menu">
            <span class="font-bold text-uppercase">
                مرحبا <span class="!text-[15px] font-thin">
                    {{substr(auth()->user()->username,0,4)}}
                </span>
            </span>
        </li>

        <li class="item-menu">
            <a href="{{ route('manage') }}"><i class="fa-solid fa-arrow-right-to-bracket"></i>
                أدراة الوظائف</a>
        </li>
        <li class="item-menu">
            <form class="inline" method="POST" action="{{ route('logout') }}">
                @csrf
                <button type="submit">
                    <i class="fa-solid fa-door-closed"></i> تسجيل خروج
                </button>
            </form>
        </li>
        @else
        <li class="item-menu">
            <a href="{{ route('register') }}" class="hover:text-laravel"><i class="fa-solid fa-user-plus"></i> تسجيل</a>
        </li>
        <li class="item-menu">
            <a href="{{ route('login') }}" class="hover:text-laravel"><i class="fa-solid fa-arrow-right-to-bracket"></i>
                دخول</a>
        </li>
        @endauth
    </ul>
</nav>
