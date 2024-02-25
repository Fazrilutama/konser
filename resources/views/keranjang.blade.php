@extends('template.html')

@section('title', 'Keranjang')
@include('template.nav')

@section('body')
    <div class="mt-20 mx-5 ">
        <div class="container mx-auto">
            @if (Session::has('pesan'))
                <div class="p-4 mb-4 text-sm text-green-800 rounded-lg bg-green-50 dark:bg-gray-800 dark:text-green-400"
                    role="alert">
                    <span class="font-medium">{{ Session::get('pesan') }}</span>
                </div>
            @endif
            <div class="my-10">
                <p class="text-xl md:text-3xl font-bold md:py-3 md:ml-64">Pesanan</p>
            </div>
            @foreach ($detailOrder as $do)
                <div class="md:flex md:items-center md:justify-around md:max-w-screen-lg mx-auto md:py-5 border shadow-xl my-8">
                    <div class="m-5 md:m-0">
                        <img src="{{ asset($do->event->image) }}" alt="" class="md:w-60 md:h-40 md:object-cover">
                    </div>
                    <div class=" flex flex-col gap-2 md:gap-5 mx-5">
                        <div class="pt-5 md:pt-0">
                            <p class="font-bold">Name : <span class="font-normal">{{ $do->event->name }}</span> </p>
                        </div>
                        <div class="">
                            <p class="font-bold">Tanggal : <span class="font-normal">{{ $do->event->date }}</span></p>
                        </div>
                        <div class="">
                            <p class="font-bold">Jam : <span class="font-normal">{{ $do->event->time }}</p>
                        </div>
                        <div>
                            <p class="font-bold">Qty : {{ $do->qty }}</p>

                        </div>
                    </div>
                    <div class="flex flex-col gap-2 md:gap-5 mx-5 my-3 md:my-0">
                        <p class="font-bold">Total Harga Rp.{{ number_format($do->event->price * $do->qty, 0, ',', '.') }}
                        </p>
                        @if ($do->status_pembayaran == 'completed')
                            <p>Anda sudah membayar.</p>
                            <p> Code Order: <span class="font-bold"> {{ $do->order->code }} </span></p>
                            <p class="py-5 md:py-0">
                                <a href="{{ route('printInvoiceTicket', $do->id) }}"
                                    class="focus:outline-none text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-900">Print
                                    Tiket</a>
                            </p>
                        @elseif ($do->status_pembayaran == 'rejected')
                            <p class="font-bold text-red-500">Maaf, pembayaran Anda ditolak.</p>
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

        <div class="bg-neutral-900 pt-5">
            <div class="container mx-auto  grid grid-cols-1 md:grid-cols-3 border-b-2 py-5">
                <div class="flex flex-col items-center justify-center text-center mx-10 text-white">
                    <img src="/img/logo.png" alt="" class="w-32">
                    <p class="">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nulla et nihil tenetur iusto
                        nesciunt eum ipsa excepturi cumque, eaque dicta!</p>
                </div>

                <div class="flex flex-col items-center">
                    <h1 class="text-white text-center text-2xl font-bold">Social Media</h1>
                    <div class="flex flex-col justify-center items-start gap-3 mt-10">

                        <a href="https://www.facebook.com/infosmi.id/?locale=id_ID" target="_blank">
                            <div class="flex  justify-center items-center gap-2">
                                <img src="/img/footer/fb.png" alt="">
                                <p class="text-white text-sm ">Infosmi Media</p>
                            </div>
                        </a>
                        <a href="https://twitter.com/infosmi_id" target="_blank">
                            <div class="flex  justify-center items-center gap-2">
                                <img src="/img/footer/x.png" alt="">
                                <p class="text-white text-sm">INFOSMI</p>
                            </div>
                        </a>
                        <a href="https://www.instagram.com/sukabumi_/" target="_blank">
                            <div class="flex  justify-center items-center gap-2">
                                <img src="/img/footer/ig.png" alt="">
                                <p class="text-white text-sm">Sukabumi_</p>
                            </div>
                        </a>
                        <a href="https://www.youtube.com/channel/UCBvylifwSRvo6NzSMNyKHWQ" target="_blank">
                            <div class="flex  justify-center items-center gap-2">
                                <img src="/img/footer/yt.png" alt="">
                                <p class="text-white text-sm">INFOSMI</p>
                            </div>
                        </a>
                    </div>
                </div>

                <div class="flex flex-col items-center">
                    <h1 class="text-white text-2xl font-bold">Kontak</h1>
                    <div class="flex flex-col justify-items-start items-start gap-3 mt-10">

                        <div class="flex  justify-center items-center gap-2">
                            <img src="/img/footer/email.png" alt="">
                            <p class="text-white text-sm ">infosmi@gmail.com</p>
                        </div>
                        <div class="flex  justify-center items-center gap-2">
                            <img src="/img/footer/phone.png" alt="">
                            <p class="text-white text-sm">0812-2030-2014</p>
                        </div>

                    </div>
                </div>
            </div>
            <div class="flex justify-center items-center text-center py-3 text-white">
                <p class="">Copyright By: Fazril Utama</p>
            </div>
        </div>


@endsection
