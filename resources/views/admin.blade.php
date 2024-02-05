@extends('template.html')

@section('title', 'Home Admin')
@include('template.nav')
@section('body')

    <div class="mx-24  mt-20">
        <a href="{{ route('tambah') }}" class="p-3  bg-blue-600" >Tambah data</a>
        <table class="w-full shadow-2xl text-sm text-left text-gray-500 dark:text-gray-400 mt-5">

            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
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
                        Status
                    </th>
                    <th scope="col" class="px-6 py-3">
                        stock
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
                    
                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                    <td class="px-6 py-4">
                        {{ $loop->iteration }}
                    </td>
                    <td class="px-6 py-4">
                        {{ $event->name }}
                    </td>
                    <td class="px-6 py-4">
                        <img src="{{ asset($event->image) }}" alt="" width="250">
                    </td>
                    <td class="px-6 py-4">
                        {{ $event->status }}
                    </td>
                    <td class="px-6 py-4">
                        {{ $event->stock }}
                    </td>
                    <td class="px-6 py-4">
                        @if (auth()->user()->role == 'kasir')
                            {{ $event->venue }}
                        @elseIf(auth()->user()->role == 'admin')
                        <form action="{{ route('events.update-status', $event->id) }}" method="POST">
                            @csrf
                            <label for="status" class=""> Update Status</label>
                            <div>
                                <select name="status" id="status" class="">
                                    <option value="active" {{ $event->status == 'active' ? 'selected' : '' }}>active</option>
                                    <option value="inactive" {{ $event->status == 'inactive' ? 'selected' : '' }}>inactive</option>
                                </select>
                                <button type="submit" class="">Update</button>
                            </div>
                        </form>
                        @endif

                    </td>
                    @if (auth()->user()->role != 'kasir')
                       
                    <td>
                        <a href="">Edit</a>
                        <a href="">Hapus</a>
                    </td>
                    @endif
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>


@endsection
