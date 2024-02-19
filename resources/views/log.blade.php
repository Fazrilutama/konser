@extends('template.html')

@section('title', 'log aktifitas')
@section('body')
    @include('template.nav')
    <div class="container mx-auto mt-20">
        <h2 class="text-center text-2xl py-10 font-bold mb-2"> Log Aktifitas </h2>


        <table class="w-full shadow-2xl text-sm text-left text-gray-700  mt-5 rounded-xl my-20">

            <thead class="text-xs text-gray-700 uppercase bg-gray-300">
                <tr>
                    <th scope="col" class="px-6 py-3">
                        No
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Taggal
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Aktifitas
                    </th>

                </tr>
            </thead>
            <tbody>
                @foreach ($log as $item)
                    <tr class="bg-white text-base">
                        <td >{{ $loop->iteration }}</td>
                        <td class="px-6 py-4">
                            {{ $item->created_at }}
                        </td>

                        </td>
                        <td class="px-6 py-4">
                            {{ $item->activity }}
                        </td>

                    </tr>
                @endforeach
            </tbody>
        </table>

    </div>
@endsection
