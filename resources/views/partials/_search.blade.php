<form action="{{ route('home')}}" class="form-search">
    <div class="flex flex-row justify-center">
        <div class="w-[20%]">
            <button type="submit" class="btn-search rounded-tl-0  rounded-bl-0  rounded-tr-lg  rounded-br-lg">
                بحث
            </button>
        </div>
        <input type="text" name="search" class="h-16 w-[80%] px-4 rounded-lg z-0 focus:shadow focus:outline-none block"
            placeholder="مطور تطبيقات, مطور ويب, مصمم ..." />

        <div class="absolute top-4 left-3 ">
            <i class="fa fa-search text-gray-400 z-20 hover:text-gray-500"></i>
        </div>
    </div>
</form>
