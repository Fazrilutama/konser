@extends('template.html')

@section('title', 'home')

@include('template.nav')
@section('body')




    <h3 class="">List Event</h3>
    <div class="grid grid-cols-1 sm:grid-cols-2 xl:grid-cols-4 gap-4 md:gap-10 mx-5 mt-20">
        @foreach ($e as $event)
          <div class="bg-white p-4 shadow-md rounded-xl">
            <div>
                <img class="rounded-t-lg" src="{{ $event->image }}" alt="{{ $event->name }}" />
            </div>
            <h2 class="text-lg md:text-xl font-bold mb-2">{{ $event->name }}</h2>
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

@endsection
