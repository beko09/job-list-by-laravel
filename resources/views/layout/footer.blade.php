 <footer
            class="bg-laravel py-28 text-center"
        >
           <p class="text-white/70 font-samsungs  text-xl">
                جميع الحقوق
                &copy;
                <script>
                  document.write(new Date().getFullYear());
                </script>
                محفوظة لموقع
                  <a href="{{ route('home') }}" class="block text-xl font-bold text-yellow-500 font-samsungs">فُرصَ <span class="text-white text-lg font-semibold">ة</span>
                </a>
              </p>

            {{-- <a
                href="{{route('create')}}"
                class="absolute top-1/3 right-10 bg-black text-white py-2 px-5"
                >Post Job</a
            > --}}
        </footer>
