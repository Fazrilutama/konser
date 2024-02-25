@extends('template.html')

@section('title', 'Detail Event')
@include('template.nav')
@section('body')
<div class="mx-5">

    <div class="my-20 max-w-screen-xl mx-auto shadow-2xl">
        <form action="{{ route('postKeranjang', $event->id) }}" method="POST">
            @csrf
            <div class="mx-5">

                <img src="{{ asset($event->image) }}" class="w-full h-64 md:h-[50%] xl:h-[70%]" alt="">
                <div class=" my-5">
                    <h1 class="font-bold text-xl md:text-3xl">{{ $event->name }}</h1>
                    <p class="text-sm md:text-lg mt-1">stock : {{ $event->stock }}</p>
                    <div class="text-sm md:text-lg mt-3">
                        {{ $event->deskripsi }}
                    </div>
                </div>
            </div>
            <div class="mx-5 grid grid-cols-3 my-10 md:my-14">
                <div class="text-center">
                    <p class="font-bold md:text-2xl">Waktu</p>
                    <p class="mt-3 text-sm md:text-lg">{{ $event->date }}</p>
                </div>
                <div class="text-center">
                    <p class="font-bold md:text-2xl">Jam</p>
                    <p class="mt-3 text-sm md:text-lg">{{ $event->time }}</p>
                </div>
                <div class="text-center">
                    <p class="font-bold md:text-2xl">Lokasi</p>
                    <p class="mt-3 text-sm md:text-lg">{{ $event->venue }}</p>
                </div>
            </div>
            <div class="md:grid md:grid-cols-2 xl:px-6">
                <div class="mx-5 my-10 ">
                    <h2 class="font-bold text-base md:text-xl mb-5">Link map</h2>
                    <iframe src="{{ $event->location }}" class="w-full h-44 md:h-64 " frameborder="0"></iframe>
                </div>
                <div class="mx-5 my-10 ">
                    <div class="flex  flex-col gap-5 md:ml-24">
                        <h2 class="font-bold text-base md:text-xl">Pesan Tiket Anda Sebelum kehabisan</h2>
                        <div class="mt-5">
                            <p class="font-bold text-base md:text-xl">Harga</p>
                            Rp. {{ number_format($event->price, 0, ',', '.') }} / Tiket
                        </div>
                        <div>
                            <p class="font-bold text-base md:text-xl">Jumlah Tiket</p>
                            <input type="number" name="banyak" class="p-2 bg-slate-300  rounded-md" required
                                value="1" min="1">
                        </div>
                        <div>
                            <h2 class="font-bold text-base md:text-xl"> Pesan Sekarang</h2>
                            <div class="my-3">
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
