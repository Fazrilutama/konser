<nav class="fixed w-full top-0 z-20 bg-black bg-opacity-65">
    @auth

        @if (auth()->user()->role == 'user')
            <div class="flex items-center text-lg justify-between mx-3 md:mx-8">
                <img src="/img/logo.png" alt="" class="w-14 md:w-20">
                <div class="flex items-center gap-3 text-sm md:text-xl md:gap-10 ">
                    <a href="/" class="text-white font-semibold hover:text-emerald-400">Beranda</a>
                    <a href="{{ route('keranjang') }}" class="text-white font-semibold hover:text-emerald-400">Pesanan</a>
                    <a href="#event" class="text-white font-semibold hover:text-emerald-400">Event</a>
                    <a href="#brands" class="text-white font-semibold hover:text-emerald-400">Partner</a>
                    <a href="{{ route('logout') }}" class="text-white font-semibold hover:text-emerald-400">Logout</a>
                </div>
            </div>
        @elseif (auth()->user()->role == 'admin')
            <div class="flex items-center text-lg justify-between mx-8">
                <img src="/img/logo.png" alt="" class="w-20">
                <div class="flex items-center gap-10 md:text-xl">
                    <a href="/admin/events" class="text-white font-semibold hover:text-emerald-400">Beranda</a>
                    <a href="{{ route('riwayat') }}" class="text-white font-semibold hover:text-emerald-400">riwayat</a>
                    <a href="{{ route('logout') }}" class="text-white font-semibold hover:text-emerald-400">logout</a>
                </div>
            </div>
        @elseif (auth()->user()->role == 'kasir')
            <div class="flex items-center text-lg justify-between mx-8">
                <img src="/img/logo.png" alt="" class="w-20">
                <div class="flex items-center gap-10 md:text-xl">
                    <a href="/admin/events" class="text-white font-semibold hover:text-emerald-400">Beranda</a>
                    <a href="{{ route('orders') }}" class="text-white font-semibold hover:text-emerald-400">Pesanan</a>
                    <a href="{{ route('riwayat') }}" class="text-white font-semibold hover:text-emerald-400">Riwayat</a>
                    <a href="{{ route('logout') }}" class="text-white font-semibold hover:text-emerald-400">Logout</a>
                </div>
            </div>
        @elseif (auth()->user()->role == 'owner')
        <div class="flex items-center text-lg justify-between mx-8">
            <img src="/img/logo.png" alt="" class="w-20">
            <div class="flex items-center gap-10 md:text-xl">
                <a href="/owner" class="text-white font-semibold hover:text-emerald-400">Beranda</a>
                <a href="{{ route('log') }}" class="text-white font-semibold hover:text-emerald-400">log</a>
                <a href="{{ route('riwayat') }}" class="text-white font-semibold hover:text-emerald-400">riwayat</a>
                <a href="{{ route('logout') }}" class="text-white font-semibold hover:text-emerald-400">logout</a>
            </div>
        </div>
        @endif
    @else
        <div class=" container mx-auto  ">
            <div class="gap-5 flex items-center text-lg justify-between mx-3 md:mx-8">
                <a href="{{ route('home') }}">
                    <img src="/img/logo.png" alt="" class="w-14 md:w-20">
                </a>
                <div class="flex items-center gap-3 text-base md:gap-10 md:text-xl ">
                    <a href="{{ route('home') }}" class="text-white font-semibold hover:text-emerald-400">Beranda</a>
                    <a href="#event" class="text-white font-semibold hover:text-emerald-400">Event</a>
                    <a href="#brands" class="text-white font-semibold hover:text-emerald-400">Partner</a>
                    <a href="/login" class="text-white font-semibold hover:text-emerald-400">Login</a>
                </div>
            </div>
        </div>

    @endauth

</nav>