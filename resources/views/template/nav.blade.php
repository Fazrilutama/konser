<nav class="fixed w-full top-0 z-20 bg-black bg-opacity-65">
    @auth

        @if (auth()->user()->role == 'user')
            <div class="flex items-center text-lg justify-between mx-8">
                <img src="/img/logo.png" alt="" class="w-20">
                <div class="flex items-center gap-10 ">
                    <a href="/" class="text-white font-semibold hover:text-emerald-400">Home</a>
                    <a href="{{ route('keranjang') }}" class="text-white font-semibold hover:text-emerald-400">Orders</a>
                    <a href="#about" class="text-white font-semibold hover:text-emerald-400">About</a>
                    <a href="#event" class="text-white font-semibold hover:text-emerald-400">Event</a>
                    <a href="#brands" class="text-white font-semibold hover:text-emerald-400">Brands</a>
                    <a href="{{ route('logout') }}" class="text-white font-semibold hover:text-emerald-400">logout</a>
                </div>
            </div>
        @elseif (auth()->user()->role == 'admin')
            <div class="flex items-center text-lg justify-between mx-8">
                <img src="/img/logo.png" alt="" class="w-20">
                <div class="flex items-center gap-10 ">
                    <a href="/admin/events" class="text-white font-semibold hover:text-emerald-400">Home</a>
                    <a href="{{ route('riwayat') }}" class="text-white font-semibold hover:text-emerald-400">riwayat</a>
                    <a href="{{ route('logout') }}" class="text-white font-semibold hover:text-emerald-400">logout</a>
                </div>
            </div>
        @elseif (auth()->user()->role == 'kasir')
            <div class="flex items-center text-lg justify-between mx-8">
                <img src="/img/logo.png" alt="" class="w-20">
                <div class="flex items-center gap-10 ">
                    <a href="/admin/events" class="text-white font-semibold hover:text-emerald-400">Home</a>
                    <a href="{{ route('orders') }}" class="text-white font-semibold hover:text-emerald-400">Order</a>
                    <a href="{{ route('riwayat') }}" class="text-white font-semibold hover:text-emerald-400">riwayat</a>
                    <a href="{{ route('logout') }}" class="text-white font-semibold hover:text-emerald-400">logout</a>
                </div>
            </div>
        @elseif (auth()->user()->role == 'owner')
        <div class="flex items-center text-lg justify-between mx-8">
            <img src="/img/logo.png" alt="" class="w-20">
            <div class="flex items-center gap-10 ">
                <a href="/owner" class="text-white font-semibold hover:text-emerald-400">Home</a>
                <a href="{{ route('riwayat') }}" class="text-white font-semibold hover:text-emerald-400">riwayat</a>
                <a href="{{ route('logout') }}" class="text-white font-semibold hover:text-emerald-400">logout</a>
            </div>
        </div>
        @endif
    @else
        <div class=" container mx-auto  ">
            <div class="gap-5 flex items-center text-lg justify-between mx-8">
                <a href="/">
                    <img src="/img/logo.png" alt="" class="w-20">
                </a>
                <div class="flex items-center gap-10 ">
                    <a href="#home" class="text-white font-semibold hover:text-emerald-400">Home</a>
                    <a href="#about" class="text-white font-semibold hover:text-emerald-400">About</a>
                    <a href="#event" class="text-white font-semibold hover:text-emerald-400">Event</a>
                    <a href="#brands" class="text-white font-semibold hover:text-emerald-400">Brands</a>
                    <a href="/login" class="text-white font-semibold hover:text-emerald-400">Login</a>
                </div>
            </div>
        </div>

    @endauth

</nav>