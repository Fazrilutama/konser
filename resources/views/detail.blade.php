@extends('template.html')

@section('title', 'Detail Event')
@include('template.nav')
@section('body')
    <div class="mt-20 mx-10 ">
        <div class="flex">
            <div class="w-1/2 flex flex-col items-center bg-slate-300">
                <img src="/img/dewa19.jpg" class="w-full" alt="">
            </div>
            <div class="flex flex-col justify-center items-center w-1/2 ">
                <h1 class="text-4xl font-bold my-10">{{ $event->name }}</h1>
                <div class="text-lg">
                    {{ $event->deskripsi }}
                </div>
            </div>
        </div>
        <div class="flex my-5">
            <div class="flex">
                <div>
                    <img src="/img/lokasi.png" alt="logo lokasi " class="w-20">
                </div>
                <div class=" flex flex-col justify-center gap-2 ml-5 text-2xl ">
                    <p class="font-bold">Venue</p>
                    <p>{{ $event->venue }}</p>
                </div>
            </div>
            <div>
                <iframe src="{{ $event->location }}" frameborder="0"></iframe>
            </div>

        </div>

        <div>
            <div>
                <img src="" alt="">
                <p>start date</p>
                <p>waktu mulai</p>
            </div>
            <div>
                <img src="" alt="">
                <p>end date</p>
                <p>waktu mulai</p>
            </div>
        </div>
        <a href="">Get Tiket</a>
        <a href="">Back to event</a>
    </div>
@endsection
