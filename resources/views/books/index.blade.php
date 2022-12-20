@extends('templates.default')

@php
$title = "Semua Buku"
@endphp

@section('content')

<div class="w-full flex justify-end mb-4">
    <a href="{{route('books.create')}}"
        class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5">Tambah
        Data Buku +</a>
</div>
<div class="overflow-x-auto relative shadow-md sm:rounded-lg mt-8">
    <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                <th scope="col" class="py-3 px-6">
                    Judul Buku
                </th>
                <th scope="col" class="py-3 px-6">
                    Tahun Rilis
                </th>
                <th scope="col" class="py-3 px-6">
                    ISBN
                </th>
                <th scope="col" class="py-3 px-6">
                    Penulis
                </th>
                <th scope="col" class="py-3 px-6">
                    Penerbit
                </th>
                <th scope="col" class="py-3 px-6">
                    <span class="sr-only">Edit</span>
                </th>
            </tr>
        </thead>
        <tbody>
            @foreach ($books as $book)
            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                <th scope="row" class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    {{$book->title}}
                </th>
                <td class="py-4 px-6">
                    {{$book->release_year}}
                </td>
                <td class="py-4 px-6">
                    {{$book->isbn}}
                </td>
                <td class="py-4 px-6">
                    {{$book->author}}
                </td>
                <td class="py-4 px-6">
                    {{$book->publisher}}
                </td>
                <td class="py-4 px-6 text-right flex justify-end">
                    <a href="{{route('books.edit', $book->id)}}"
                        class="font-medium text-blue-600 dark:text-blue-500 hover:underline mr-3">Edit</a>
                    <form action="{{route('books.destroy', $book->id)}}" method="post">
                        @method('DELETE')
                        @csrf
                        <a href="" class="font-medium text-red-600 dark:text-blue-500 hover:underline mr-3" onclick="event.preventDefault();
                            this.closest('form').submit();">Delete</a>
                    </form>
                    <a href="{{route('books.show', $book->id)}}"
                        class="font-medium text-green-400 dark:text-blue-500 hover:underline">Details</a>
                </td>
            </tr>
            @endforeach

        </tbody>
    </table>
</div>

@endsection
