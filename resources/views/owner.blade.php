@extends('template.html')

@section('title', 'home')
@include('template.nav')
@section('body')

    <div class="mx-24  mt-24">
        <div class="flex justify-between items-center">
            <h1 class="text-2xl font-bold">List Event</h1>
        </div>
        <table class="w-full shadow-2xl text-sm text-left text-gray-700  mt-5 rounded-xl my-20">

            <thead class="text-xs text-gray-700 uppercase bg-gray-300">
                <tr>
                    <th scope="col" class="px-6 py-3">
                        No
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Name
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Foto
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Waktu Acara
                    </th>
                    <th scope="col" class="px-6 py-3">
                        stock
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Harga
                    </th>
                    <th scope="col" class="px-6 py-3">
                        lokasi
                    </th>
                    <th scope="col" class="px-6 py-3">
                        linkMaps
                    </th>
                </tr>
            </thead>
            <tbody>
                @foreach ($events as $event)
                    <tr class="bg-white text-base">
                        <td>{{ $loop->iteration }}</td>
                        <td class="px-6 py-4">
                            {{ $event->name }}
                        </td>
                        <td class="px-6 py-4">
                            <img src="{{ asset($event->image) }}" alt="" width="250">
                        </td>
                        <td class="px-6 py-4">
                            <p>
                                Tanggal: {{ $event->date }}
                            </p>
                            <p>
                                Jam : {{ $event->time }}
                            </p>
                        </td>
                        <td class="px-6 py-4">
                            {{ $event->stock }}
                        </td>
                        <td class="px-6 py-4">
                            Rp. {{ number_format($event->price, 0, ',', '.') }}
                        </td>
                        <td class="px-6 py-4">
                            {{ $event->venue }}
                        </td>
                        <td class="px-6 py-4">
                                <iframe src="{{ $event->location }}" frameborder="0" width="250"></iframe>
                        </td>

                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <div class="bg-neutral-900 pt-5">
        <div class="container mx-auto  grid grid-cols-1 md:grid-cols-3 border-b-2 py-5">
            <div class="flex flex-col items-center justify-center text-center mx-10 text-white">
                <img src="/img/logo.png" alt="" class="w-32">
                <p class="">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nulla et nihil tenetur
                    iusto
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
