@extends('template.html')

@section('title', 'home')
@include('template.nav')
@section('body')

    <div class="mx-24  mt-24">
        <div class="flex justify-between items-center">
            <h1 class="text-2xl font-bold">List Event</h1>
            @if (auth()->user()->role == 'admin')
                <a href="{{ route('tambah') }}"
                    class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Tambah
                    data</a>
            @endif
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
                        Image
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
                        Venue
                    </th>
                    <th scope="col" class="px-6 py-3">
                        location
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


@endsection
