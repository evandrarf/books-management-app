@extends('templates.default')

@php
$title = "Detail Buku"
@endphp

@section('content')
<div class="flex flex-col">
    <div class="flex justify-between">
        <div class="flex flex-col">
            <h1 class="mt-10 text-5xl font-bold">{{$book->title}}</h1>
            <span class="mt-4 text-xl">{{$book->release_year}}</span>
            <span class="mt-4 text-gray-500">{{$book->author}}</span>

        </div>
        <div class="flex h-fit">
            <a href="{{route('books.edit', $book->id)}}"
                class="px-6  py-2 text-slate-100 mr-5 outline-none bg-blue-500 rounded">Edit</a>
            <form action="{{route('books.destroy', $book->id)}}" method="POST">
                @csrf
                @method("DELETE")
                <button class="px-6 py-2 text-slate-100 mr-5 outline-none bg-red-500 rounded"
                    type="submit">Delete</button>
            </form>
        </div>
    </div>
    <div class="mt-8">{{$book->synopsis}}</div>
    <div class="flex justify-between text-xs mt-10">
        <span> ISBN {{$book->isbn}}</span>
        <span>{{$book->publisher}}</span>
    </div>
</div>
@endsection
