@extends('Template.html')

@section('title', 'Bayar')
@include('template.nav')

@section('body')


    <div class="max-w-sm mx-auto mt-20">
        <form action="{{ route('admin.postTambah') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="mb-5">
                <label class="block mb-2 text-sm font-medium text-gray-700">Name</label>
                <input type="text" name="name" id="name"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                    required>
            </div>
            <div class="mb-5">
                <label class="block mb-2 text-sm font-medium text-gray-900">Image</label>
                <input type="file" name="image" id="image"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 d"
                    required>
            </div>
            <div class="mb-5">
                <label class="block mb-2 text-sm font-medium text-gray-900">deskripsi</label>
                <input type="text" name="deskripsi" id="deskripsi"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 d"
                    required>
            </div>
            <div class="mb-5">
                <label class="block mb-2 text-sm font-medium text-gray-900">date</label>
                <input type="date" name="date" id="date"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 d"
                    required>
            </div>
            <div class="mb-5">
                <label class="block mb-2 text-sm font-medium text-gray-900">stock</label>
                <input type="number" name="stock" id="stock"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 d"
                    required>
            </div>
            <div class="mb-5">
                <label class="block mb-2 text-sm font-medium text-gray-900">time</label>
                <input type="time" name="time" id="time"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 d"
                    required>
            </div>
            <div class="mb-5">
                <label class="block mb-2 text-sm font-medium text-gray-900">location</label>
                <input type="text" name="location" id="location"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 d"
                    required>
            </div>
            <div class="mb-5">
                <label class="block mb-2 text-sm font-medium text-gray-900">venue</label>
                <input type="text" name="venue" id="venue"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 d"
                    required>
            </div>
            <div class="mb-5">
                <label class="block mb-2 text-sm font-medium text-gray-900">harga</label>
                <input type="number" name="price" id="price"
                    class="bg-gray-50  border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 d "
                    required>
            </div>
            <div class="mb-5">
                <label class="block mb-2 text-sm font-medium text-gray-900">Status</label>
                <select name="status"
                    id="status" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 d">
                    <option value="active">active</option>
                    <option value="inactive">inactive</option>
                </select>
            </div>
            <button type="submit"
                class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Tambah</button>
        </form>
    </div>
@endsection
