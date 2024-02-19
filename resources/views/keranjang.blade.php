@extends('template.html')

@section('title', 'Keranjang')
@include('template.nav')

@section('body')
    <div class="mt-20 ">
        <div class="container mx-auto">
            <div class="my-10">
                <p class="text-3xl font-bold py-3 ml-64">Keranjang</p>
            </div>
            @foreach ($detailOrder as $do)
                <div class="flex items-center justify-around max-w-screen-lg mx-auto py-5 border shadow-xl my-8">
                    <div>
                        <img src="{{ asset($do->event->image) }}" alt="" class="w-60 h-48">
                    </div>
                    <div class=" flex flex-col gap-5">
                        <div class="flex">
                            <p class="font-bold md">name : </p>
                            <p>{{ $do->event->name }}</p>
                        </div>
                        <div class="flex">
                            <p class="font-bold">tanggal acara : </p>
                            <p>{{ $do->event->date }}</p>
                        </div>
                        <div class="flex">
                            <p class="font-bold">Jam : </p>
                            <p>{{ $do->event->time }}</p>
                        </div>
                        <div>
                            <p class="font-bold">qty : {{ $do->qty }}</p>

                        </div>
                    </div>
                    <div class="flex flex-col gap-5">
                        <p class="font-bold">Total Harga Rp.{{ number_format($do->event->price * $do->qty, 0, ',', '.') }}
                        </p>
                        @if ($do->status_pembayaran == 'completed')
                            <p>Anda sudah membayar.</p>
                            <p> Code Order: <span class="font-bold"> {{ $do->order->code }} </span></p>
                            <p>Terima Kasih</p>
                        @elseif ($do->status_pembayaran == 'rejected')
                            <p class="font-bold">Maaf, pembayaran Anda ditolak.</p>
                        @else
                            <div class="">
                                <a href="{{ route('bayar', $do->id) }}"
                                    class="text-white text-center bg-gray-800 hover:bg-gray-900 focus:outline-none focus:ring-4 focus:ring-gray-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-gray-800 dark:hover:bg-gray-700 dark:focus:ring-gray-700 dark:border-gray-700">Bayar</a>

                                <a href="{{ route('batalkanpesanan', $do->id) }}"
                                    class="focus:outline-none text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-900"
                                    onclick="return confirm('Yakin untuk membatalkan???')">Hapus</a>
                            </div>
                        @endif
                    </div>
                </div>
            @endforeach
        </div>
    </div>

@endsection
