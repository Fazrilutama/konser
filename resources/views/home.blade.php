@extends('template.html')

@section('title', 'home')

@include('template.nav')
@section('body')


    <div>
        <div class="h-screen bg-cover " style="background-image: url('{{ asset('/img/bg-4.jpg') }}');" id="home" >
            <div class=" container mx-auto ">
                <div class="pt-60 pl-10 md:pl-28">
                    <h1 class="text-white text-5xl md:text-8xl font-black tracking-wider"><span
                            class="text-transparent bg-clip-text bg-gradient-to-r to-emerald-600 from-sky-400">INFOSMI</span>
                    </h1>
                    <h1 class="text-white text-5xl md:text-8xl font-black tracking-wider">FESTIVAL</h1>
                    <p class="w-[250px] md:w-[500px] text-white text-base md:text-base tracking-wider ">Lorem ipsum dolor sit
                        amet consectetur adipisicing elit. Mollitia porro, reiciendis tenetur eveniet obcaecati temporibus!
                    </p>
                </div>
            </div>
        </div>
        <div>
            <div class="container mx-auto my-20" id="about" >
                <div class="text-center mx-auto max-w-3xl">
                    <h1 class="text-3xl font-medium my-3">ABOUT</h1>
                    <h1 class="text-5xl text-gray-900 font-bold tracking-wider">INFOSMI FESTIVAL</h1>
                    <p class="mt-8 text-base tracking-wide">Lorem ipsum dolor sit amet consectetur adipisicing elit. Natus
                        delectus sint, incidunt expedita enim molestiae inventore. Odio fugiat at quia accusantium, sed
                        magnam rerum itaque laudantium! Necessitatibus animi ad recusandae.</p>
                </div>
            </div>
        </div>
        <div class="bg-neutral-100 pb-32 pt-10" id="event">
            <div class="container mx-auto  ">
                <h1 class="text-3xl font-bold p-5">List Event</h1>
                <div class=" grid grid-cols-1 sm:grid-cols-2 xl:grid-cols-4 mx-3 gap-4 md:gap-10  ">
                    @foreach ($e as $event)
                        <div class="p-4 shadow-xl rounded-xl">
                            <div class="">
                                <img class="w-full h-48" src="{{ $event->image }}" alt="{{ $event->name }}" />
                            </div>
                            <h2 class="text-lg md:text-xl font-bold my-3">{{ $event->name }}</h2>
                            <p class="text-gray-600">{{ $event->deskripsi }}</p>
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
            <div class="h-80 flex flex-col items-center justify-center text-white">
                <h1 class="text-white text-4xl font-black tracking-wide">DAPATKAN TIKET ANDA SEKARANG!!</h1>

                <a href="#event"
                    class="text-white bg-gradient-to-br mt-8 from-purple-600 to-blue-500 hover:bg-gradient-to-bl focus:ring-4 focus:outline-none focus:ring-blue-300 dark:focus:ring-blue-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2">DAPATKAN
                    TIKET</a>
            </div>
        </div>
        <div class="container mx-auto" id="brands" >
            <div class="flex flex-col justify-center items-center gap-3 mt-20">
                <h1 class="text-3xl font-bold">Brands</h1>
                <p class="max-w-screen-md text-center text-base tracking-wider">
                    Kami merasa senang bisa bekerja sama dengan merek-merek ternama dalam industri. Ini hanyalah beberapa di
                    antaranya.</p>
            </div>
            <div class="flex gap-16 flex-wrap justify-evenly my-20">
                <div class="w-60 flex justify-center items-center">
                    <img src="/img/brands/1.png" alt="" width="125">
                </div>
                <div class="w-60 flex justify-center items-center">
                    <img src="/img/brands/2.png" alt="" width="150">
                </div>
                <div class="w-60 flex justify-center items-center">
                    <img src="/img/brands/3.png" alt="" width="175">
                </div>
                <div class="w-60 flex justify-center items-center">
                    <img src="/img/brands/4.png" alt="" width="150">
                </div>
                <div class="w-60 flex justify-center items-center">
                    <img src="/img/brands/5.png" alt="" width="125">
                </div>
                <div class="w-60 flex justify-center items-center">
                    <img src="/img/brands/6.png" alt="" width="175">
                </div>
                <div class="w-60 flex justify-center items-center">
                    <img src="/img/brands/7.png" alt="" width="125">
                </div>
                <div class="w-60 flex justify-center items-center">
                    <img src="/img/brands/8.png" alt="" width="100">
                </div>
                <div class="w-60 flex justify-center items-center">
                    <img src="/img/brands/9.png" alt="" width="100">
                </div>


            </div>
        </div>
        <div class="bg-neutral-900 pt-5">
            <div class="container mx-auto grid grid-cols-3 border-b-2 py-5">
                <div class="flex flex-col items-center justify-center text-center mx-10 text-white">
                    <img src="/img/logo.png" alt="" class="w-32">
                    <p class="">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nulla et nihil tenetur iusto
                        nesciunt eum ipsa excepturi cumque, eaque dicta!</p>
                </div>

                <div class="flex flex-col items-center">
                    <h1 class="text-white text-2xl font-bold">Social Media</h1>
                    <div class="flex flex-col justify-center items-center gap-3 mt-10">

                        <div class="flex  justify-center items-center gap-2">
                            <img src="/img/footer/fb.png" alt="">
                            <p class="text-white text-sm ">INFOSMIFEST</p>
                        </div>
                        <div class="flex  justify-center items-center gap-2">
                            <img src="/img/footer/x.png" alt="">
                            <p class="text-white text-sm">INFOSMIFEST</p>
                        </div>
                        <div class="flex  justify-center items-center gap-2">
                            <img src="/img/footer/ig.png" alt="">
                            <p class="text-white text-sm">INFOSMIFEST</p>
                        </div>
                        <div class="flex  justify-center items-center gap-2">
                            <img src="/img/footer/yt.png" alt="">
                            <p class="text-white text-sm">INFOSMIFEST</p>
                        </div>
                    </div>
                </div>

                <div class="flex flex-col items-center">
                    <h1 class="text-white text-2xl font-bold">Kontak</h1>
                    <div class="flex flex-col justify-center items-center gap-3 mt-10">

                        <div class="flex  justify-center items-center gap-2">
                            <img src="/img/footer/email.png" alt="">
                            <p class="text-white text-sm ">INFOSMIFEST</p>
                        </div>
                        <div class="flex  justify-center items-center gap-2">
                            <img src="/img/footer/phone.png" alt="">
                            <p class="text-white text-sm">INFOSMIFEST</p>
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
