@extends('template.html')

@section('title', 'home')

@include('template.nav')
@section('body')



    <div>
        @if (Session::has('bayar'))
            <div class="p-4 mt-20 mb-4 text-sm text-green-800 rounded-lg" role="alert">
                <span class="font-medium">{{ Session::get('bayar') }}</span>
            </div>
        @endif
        <div>

            @if (Session::has('logout'))
                <div class="p-4 mt-20 mb-4 text-sm text-green-800 rounded-lg" role="alert">
                    <span class="font-medium">{{ Session::get('logout') }}</span>
                </div>
            @endif
            <div class="h-screen bg-cover " style="background-image: url('{{ asset('/img/bg-4.jpg') }}');" id="home">
                <div class=" container mx-auto ">

                    <div class="pt-60 pl-10 md:pl-28">
                        <h1 class="text-white text-5xl md:text-8xl font-black tracking-wider"><span
                                class="text-transparent bg-clip-text bg-gradient-to-r to-emerald-600 from-sky-400">INFOSMI</span>
                        </h1>
                        <h1 class="text-white text-5xl md:text-8xl font-black tracking-wider">FESTIVAL</h1>
                        <p class="w-[250px] md:w-[500px] text-white text-base md:text-base tracking-wider ">Lorem ipsum
                            dolor
                            sit
                            amet consectetur adipisicing elit. Mollitia porro, reiciendis tenetur eveniet obcaecati
                            temporibus!
                        </p>
                    </div>
                </div>
            </div>
            <div>
                <div class="container mx-auto my-20" id="about">
                    <div class="text-center mx-5 md:mx-auto max-w-3xl">
                        <h1 class="text-3xl font-semibold my-3">Tentang</h1>
                        <h1 class="text-2xl md:text-5xl text-gray-900 font-bold tracking-wider">INFOSMI FESTIVAL</h1>
                        <p class="mt-8 text-xs md:text-base tracking-wide">Lorem ipsum dolor sit amet consectetur
                            adipisicing
                            elit. Natus
                            delectus sint, incidunt expedita enim molestiae inventore. Odio fugiat at quia accusantium, sed
                            magnam rerum itaque laudantium! Necessitatibus animi ad recusandae.</p>
                    </div>
                </div>
            </div>
            <div class=" pb-32 pt-10 mx-8" id="event">
                <div class="container mx-auto  ">
                    <h1 class="text-3xl font-bold p-5">Event</h1>
                    <div class=" grid grid-cols-1 sm:grid-cols-2 xl:grid-cols-3 2xl:grid-cols-4 gap-4 md:gap-10  ">
                        @foreach ($e as $event)
                            <div class="p-4 shadow-xl rounded-xl">
                                <div class="">
                                    <img class="w-full h-48" src="{{ $event->image }}" alt="{{ $event->name }}" />
                                </div>
                                <h2 class="text-lg md:text-xl font-bold my-2">{{ $event->name }}</h2>
                                <p class="text-gray-600 font-semibold">Tanggal: {{ $event->date }}</p>
                                <p class="text-gray-600 font-semibold">{{ $event->time }}</p>
                                <div class="mt-4">
                                    <a href="{{ route('detail', $event->id) }}"
                                        class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                        Detail Event
                                    </a>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
            <div class="bg-center bg-cover pt-20" style="background-image: url('{{ asset('/img/bg-1.jpg') }}');">
                <div class="h-80 flex flex-col mx-5 items-center justify-center text-white">
                    <h1 class="text-white text-md md:text-xl lg:text-4xl font-black md:tracking-wide">
                        Raih Pengalaman Tak Terlupakanmu!!</h1>
                    <h1 class="text-white pt-3 text-md md:text-xl lg:text-4xl font-black md:tracking-wide">
                        Beli Tiket Konsermu Sekarang!!</h1>

                    <a href="#event"
                        class="text-white bg-gradient-to-br mt-8 from-purple-600 to-blue-500 hover:bg-gradient-to-bl focus:ring-4 focus:outline-none focus:ring-blue-300 dark:focus:ring-blue-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2">DAPATKAN
                        TIKET</a>
                </div>
            </div>
            <div class="container mx-auto" id="brands">
                <div class="flex flex-col justify-center items-center mx-5 gap-3 mt-20">
                    <h1 class="text-3xl font-bold">Partner</h1>
                    <p class="max-w-screen-md text-center text-base tracking-wider">
                        Kami merasa senang bisa bekerja sama dengan merek-merek ternama dalam industri. Ini hanyalah
                        beberapa di
                        antaranya.</p>
                </div>
                <div class="grid grid-cols-2 mx-5 md:flex gap-16 md:flex-wrap md:justify-evenly my-20">
                    <div class="md:w-60 flex justify-center items-center">
                        <img src="/img/brands/1.png" alt="" width="125">
                    </div>
                    <div class="md:w-60 flex justify-center items-center">
                        <img src="/img/brands/2.png" alt="" width="150">
                    </div>
                    <div class="md:w-60 flex justify-center items-center">
                        <img src="/img/brands/3.png" alt="" width="175">
                    </div>
                    <div class="md:w-60 flex justify-center items-center">
                        <img src="/img/brands/4.png" alt="" width="150">
                    </div>
                    <div class="md:w-60 flex justify-center items-center">
                        <img src="/img/brands/5.png" alt="" width="125">
                    </div>
                    <div class="md:w-60 flex justify-center items-center">
                        <img src="/img/brands/6.png" alt="" width="175">
                    </div>
                    <div class="md:w-60 flex justify-center items-center">
                        <img src="/img/brands/7.png" alt="" width="125">
                    </div>
                    <div class="md:w-60 flex justify-center items-center">
                        <img src="/img/brands/8.png" alt="" width="100">
                    </div>
                    <div class="md:w-60 flex justify-center items-center">
                        <img src="/img/brands/9.png" alt="" width="100">
                    </div>


                </div>
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
        </div>

    @endsection
