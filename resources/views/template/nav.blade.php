<nav class="fixed w-full top-0 z-20">
    <div class="mx-auto bg-gray-800 p-4 flex items-center justify-between">
        <a href="/" class="text-white font-semibold">Home</a>
        <div class="">
            @guest

            <a href="{{ route('login') }}" class="text-white">login</a>
            @else
            <a href="" class="text-white ">Transaksi</a> 
            <a href="" class="text-white">logout</a> 

            @endguest
        </div>
    </div>
</nav>




