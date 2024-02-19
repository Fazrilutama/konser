@extends('Template.html')

@section('title', 'Edit Event')
@include('template.nav')

@section('body')


    <div class="max-w-sm mx-auto mt-20">
        @if (Session::has('berhasil'))
        <alert class="alert-success">{{ Session::get('berhasil') }}</alert >
    @endif
        <form action="{{ route('admin.postEdit', $event->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="mb-5">
                <label class="block mb-2 text-sm font-medium text-gray-700">Name</label>
                <input type="text" name="name" id="name"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                    required value="{{ $event->name }}">
            </div>
            <div class="mb-5">
                <label class="block mb-2 text-sm font-medium text-gray-900">Foto</label>
                <input type="file" name="image" id="image"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 d"
                    required value="{{ $event->image }}">
            </div>
            <div class="mb-5">
                <label class="block mb-2 text-sm font-medium text-gray-900">deskripsi</label>
                <input type="text" name="deskripsi" id="deskripsi"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 d"
                    required value="{{ $event->deskripsi }}">
            </div>
            <div class="mb-5">
                <label class="block mb-2 text-sm font-medium text-gray-900">Waktu</label>
                <input type="date" name="date" id="date"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 d"
                    required value="{{ $event->date }}">
            </div>
            <div class="mb-5">
                <label class="block mb-2 text-sm font-medium text-gray-900">stock</label>
                <input type="number" name="stock" id="stock"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 d"
                    required value="{{ $event->stock }}">
            </div>
            <div class="mb-5">
                <label class="block mb-2 text-sm font-medium text-gray-900">Jam</label>
                <input type="time" name="time" id="time"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 d"
                    required value="{{ $event->time }}">
            </div>
            <div class="mb-5">
                <label class="block mb-2 text-sm font-medium text-gray-900">LinkMaps</label>
                <input type="text" name="location" id="location"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 d"
                    required value="{{ $event->location }}">
            </div>
            <div class="mb-5">
                <label class="block mb-2 text-sm font-medium text-gray-900">Lokasi</label>
                <input type="text" name="venue" id="venue"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 d"
                    required value="{{ $event->venue }}">
            </div>
            <div class="mb-5">
                <label class="block mb-2 text-sm font-medium text-gray-900">harga</label>
                <input type="number" name="price" id="price"
                    class="bg-gray-50  border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 d "
                    required value="{{ $event->price }}">
            </div>
            {{-- <div class="mb-5">
                <label class="block mb-2 text-sm font-medium text-gray-900">Status</label>
                <select name="status"
                    id="status" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 d" >
                    <option value="active">active</option>
                    <option value="inactive">inactive</option>
                </select>
            </div> --}}
            <button type="submit"
                class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Edit</button>
        </form>
    </div>
@endsection
