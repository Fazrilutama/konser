@extends('template.html')

@section('title', 'Detail Event')
@include('template.nav')
@section('body')
    <div class="my-20 max-w-screen-xl mx-auto shadow-2xl">
        <form action="{{ route('postKeranjang', $event->id) }}" method="POST">
            @csrf
            <div class="mx-5">

                <img src="{{ asset($event->image) }}" class="w-full h-64 md:h-[50%] xl:h-[70%]" alt="">
                <div class="mx-5 my-5">
                    <h1 class="font-bold text-2xl">{{ $event->name }}</h1>
                    <p class="text-md mt-1">stock : {{ $event->stock }}</p>
                    <div class="text-md mt-3">
                        {{ $event->deskripsi }}
                    </div>
                </div>
            </div>
            <div class="mx-5 grid grid-cols-3 my-10">
                <div class="text-center">
                    <p class="font-bold text-xl">Waktu</p>
                    <p class="mt-3">{{ $event->date }}</p>
                </div>
                <div class="text-center">
                    <p class="font-bold text-xl">Jam</p>
                    <p class="mt-3">{{ $event->time }}</p>
                </div>
                <div class="text-center">
                    <p class="font-bold text-xl">Lokasi</p>
                    <p class="mt-3">{{ $event->venue }}</p>
                </div>
            </div>
            <div class="md:grid md:grid-cols-2 xl:px-6">
                <div class="mx-5 my-10 ">
                    <h2 class="font-bold text-xl mb-5">Link map</h2>
                    <iframe src="{{ $event->location }}" class="w-full h-44 md:h-64 " frameborder="0"></iframe>
                </div>
                <div class="mx-5 my-10 ">
                    <div class="flex  flex-col gap-5 ml-24">
                        <h2 class="font-bold text-xl">Dapatkan Tiket {{ $event->name }}</h2>
                        <div class="mt-5">
                            <p class="font-bold text-xl">Harga</p>
                            Rp. {{ number_format($event->price, 0, ',', '.') }} / Tiket
                        </div>
                        <div>
                            <p class="font-bold text-xl">Jumlah Tiket</p>
                            <input type="number" name="banyak" class="p-2 bg-slate-300  rounded-md" required
                                value="1" min="1">
                        </div>
                        <div>
                            <h2 class="font-bold text-xl">Pesan Sekarang</h2>
                            <div>
                                <button type="submit"
                                    class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Pesan
                                    Tiket</button>
                                <a href="/"
                                    class="focus:outline-none text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-900">Kembali</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </form>

    </div>
@endsection
