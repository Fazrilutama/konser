@extends('template.html')

@section('title', 'Detail Event')
@include('template.nav')
@section('body')
    <div class="mt-14">
        <form action="{{ route('postKeranjang', $event->id) }}" method="POST">
            @csrf
        <img src="{{ asset($event->image) }}" class="w-full h-64 md:h-[50%] xl:h-[70%]"  alt="">
        <div class="mx-5 my-5">
            <h1 class="font-bold text-xl">{{ $event->name }}</h1>
            <p class="text-sm mt-1">stock : {{ $event->stock }}</p>
            <div class="text-md mt-3">
                {{ $event->deskripsi }}
            </div>
        </div>
        <div class="mx-5 grid grid-cols-3 my-10">
            <div>
                <p>Date</p>
                <p>{{ $event->date }}</p>
            </div>
            <div>
                <p>Time</p>
                <p>{{ $event->time }}</p>
            </div>
            <div>
                <p>Venue</p>
                <p>{{ $event->venue }}</p>
            </div>
        </div>
        <div class="md:grid md:grid-cols-2 xl:px-6">
            <div class="mx-5 my-10 ">
                <h2>Location</h2>
                <iframe src="{{ $event->location }}" class="w-full h-44 md:h-64 " frameborder="0"></iframe>
            </div>
            <div class="mx-5 my-10">
                <h2>Dapatkan Tiket</h2>
                <div>
                    <p>{{ $event->name }}</p>
                    <div>
                        Rp. {{ $event->price }}
                        <input type="number" name="banyak" class="w-full bg-slate-300" required value="1"
                            min="1">
                    </div>
                    <div>
                        <h2>Pesan Sekarang</h2>
                        <div>
                            <button type="submit" class="p-3 bg-blue-500">Pesan Tiket</button>
                            <a href="/" class="p-3 bg-red-500">Kembali</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </form>

    </div>
@endsection
