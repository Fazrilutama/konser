@extends('template.html')

@section('title', 'home')
@include('template.nav')
@section('body')

    <div class="mx-24  mt-24">
        <div class="flex justify-between items-center">
            <h1 class="text-2xl font-bold">List Event</h1>
            @if (auth()->user()->role == 'admin')
                <a href="{{ route('tambah') }}" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Tambah data</a>
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
                    @if (auth()->user()->role == 'kasir')
                        <th scope="col" class="px-6 py-3">
                            location
                        </th>
                    @endif
                    @if (auth()->user()->role == 'admin')
                        <th scope="col" class="px-6 py-3">
                            Update Status
                        </th>
                    @endif
                    @if (auth()->user()->role != 'kasir')
                        <th scope="col" class="px-6 py-3">
                            Aksi
                        </th>
                    @endif
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
                            @if (auth()->user()->role == 'kasir')
                            <iframe src="{{ $event->location }}" frameborder="0" width="250"></iframe>
                                
                            @elseIf(auth()->user()->role == 'admin')
                                <form action="{{ route('events.update-status', $event->id) }}" method="POST">
                                    @csrf
                                    {{-- <label for="status" class=""> Update Status</label> --}}
                                    <div>
                                        <select name="status" id="status" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block p-2 w-full dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                            <option value="active" {{ $event->status == 'active' ? 'selected' : '' }}>active
                                            </option>
                                            <option value="inactive" {{ $event->status == 'inactive' ? 'selected' : '' }}>
                                                inactive</option>
                                        </select>
                                        <button type="submit" class="text-gray-900 w-full mt-1 bg-white border border-gray-300 focus:outline-none hover:bg-gray-100 focus:ring-4 focus:ring-gray-200 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-gray-800 dark:text-white dark:border-gray-600 dark:hover:bg-gray-700 dark:hover:border-gray-600 dark:focus:ring-gray-700">Update</button>
                                    </div>
                                </form>
                            @endif

                        </td>
                        @if (auth()->user()->role != 'kasir')
                            <td class="">
                                <a href="{{ route('edit', $event->id) }}"
                                    class="bg-yellow-500 hover:bg-yellow-600 text-white font-bold py-2 px-4 rounded">Edit</a>
                                <a href="{{ route('hapus', $event->id) }}"
                                    class="bg-red-500 hover:bg-red-600 text-white font-bold py-2 px-4 rounded ml-3">Hapus</a>
                            </td>
                        @endif
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>


@endsection
