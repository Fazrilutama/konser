@extends('template.html')

@section('title', 'Keranjang')
@include('template.nav')

@section('body')
    <div class="mt-16 mx-5 ">
        <p class="text-xl py-3">status pembayaran</p>
        @foreach ($detailOrder as $do)
            <div class="border my-10">
                <div class="flex">
                    <div class="w-5/12">
                        <img src="{{ asset($do->event->image) }}" alt="">
                    </div>
                    <div class="flex flex-col w-6/12">
                        <p>{{ $do->event->name }}</p>
                        <p>{{ $do->event->date }}</p>
                        <p>{{ $do->event->time }}</p>
                    </div>
                </div>
                <div class="flex gap-5">
                    <p>Harga Rp.{{ $do->event->price }}</p>
                    <a href="{{ route('bayar', $do->id) }}">Bayar</a>
                </div>
            </div>
        @endforeach

    </div>
@endsection
