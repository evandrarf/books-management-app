@extends('templates.partials.structure')

@section('body')
<div class="relative flex items-top justify-center min-h-screen bg-gray-100  sm:items-center py-4 sm:pt-0">
    @if (Route::has('login'))
    <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
        @auth
        <a href="{{ url('/dashboard') }}" class="text-sm text-gray-700  underline">Dashboard</a>
        @else
        <a href="{{ route('login') }}" class="text-sm text-gray-700  underline">Log in</a>

        @if (Route::has('register'))
        <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700  underline">Register</a>
        @endif
        @endauth
    </div>
    @endif

    <div class="w-full h-screen text-slate-800 py-36 items-start px-28 flex flex-col">
        <h1 class="text-4xl">Pengelolaan Buku</h1>
        <p class="text-gray-500 mt-6">Aplikasi pengelolaan buku yang dibuat dengan Laravel ini merupakan solusi yang
            tepat bagi Anda yang memiliki koleksi buku yang banyak dan ingin mengelolanya dengan lebih terorganisir.
            Dengan menggunakan aplikasi ini, Anda dapat dengan mudah mencatat daftar buku yang Anda miliki, termasuk
            judul, penulis, penerbit, dan tahun terbit.</p>
        <p class="text-gray-500 mt-6">

            Aplikasi ini dikembangkan dengan menggunakan framework Laravel yang terkenal dengan kemudahan dan
            kecepatannya dalam pengembangan aplikasi web. Jadi, Anda tidak perlu khawatir dengan kinerja aplikasi ini
            yang akan selalu responsif dan cepat.</p>
        <a href="{{route('register')}}" class="mt-8 px-6 py-3 bg-blue-600  rounded text-white hover:bg-blue-700">Get
            Started</a>
    </div>
</div>

@endsection
