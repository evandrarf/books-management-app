@extends('templates.default')

@php
$title = "Tambah Data Buku"
@endphp

@section('content')

<form class="mt-6" method="POST" class="min-h-fit" action="{{route('books.store')}}">
    @csrf
    <div class="mb-6">
        <label for="title" class="block mb-2 text-sm font-medium text-gray-900 ">Judul Buku</label>
        <input type="text" id="title" name="title"
            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
            placeholder="Masukkan Judul Buku" required>
    </div>
    <div class="mb-6">
        <label for="release_year" class="block mb-2 text-sm font-medium text-gray-900 ">Tahun Rilis</label>
        <input type="number" id="release_year" name="release_year"
            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
            required placeholder="Tahun Rilis Buku">
    </div>
    <div class="mb-6">
        <label for="isbn" class="block mb-2 text-sm font-medium text-gray-900 ">ISBN</label>
        <input type="number" id="isbn" name="isbn"
            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
            required placeholder="ISBN Buku">
    </div>
    <div class="mb-6">
        <label for="author" class="block mb-2 text-sm font-medium text-gray-900 ">Penulis</label>
        <input type="text" id="author" name="author"
            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
            required placeholder="Penulis">
    </div>
    <div class="mb-6">
        <label for="publisher" class="block mb-2 text-sm font-medium text-gray-900 ">Penerbit</label>
        <input type="text" id="publisher" name="publisher"
            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
            required placeholder="Penerbit">
    </div>
    <div class="mb-6">
        <label for="synopsis" class="block mb-2 text-sm font-medium text-gray-900 ">Sinopsis</label>
        <textarea id="synopsis" name="synopsis"
            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 min-h-20"
            required placeholder="Sinopsis Buku"></textarea>
    </div>

    <button type="submit"
        class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm  sm:w-auto px-5 py-2.5 text-center">Submit</button>
</form>

@endsection
