<nav class="fixed w-full top-0 z-20">
    <div class="mx-auto bg-gray-800 p-4 flex items-center text-lg justify-between">
        @auth
        <div class="flex justify-between gap-5">

            @if (auth()->user()-> role == 'user')
            <a href="/" class="text-white font-semibold">Home</a>
            <a href="{{ route('keranjang',) }}" class="text-white ">Keranjang</a> 
            <a href="{{ route('logout') }}" class="text-white">logout</a>
            @elseif (auth()->user()->role == 'admin')
            <a href="/" class="text-white font-semibold">Home</a>
            <a href="" class="text-white font-semibold">admin</a>
            <a href="{{ route('logout') }}" class="text-white">logout</a>
            @elseif (auth()->user()->role == 'kasir')                        
            <a href="/" class="text-white font-semibold">Home</a>
            <a href="" class="text-white font-semibold">Kasir</a>
            <a href="{{ route('logout') }}" class="text-white">logout</a>

            @elseif (auth()->user()->role == 'owner')
            <a href="" class="text-white font-semibold">owner</a>
            <a href="" class="text-white font-semibold">owner</a>
            <a href="{{ route('logout') }}" class="text-white">logout</a>

            @endif
            @else
            <a href="{{ route('home') }}" class="text-white font-semibold">Home</a>
            <a href="{{ route('login') }}" class="text-white font-semibold">Login</a>

        @endauth


         
        </div>
    </div>
</nav>




