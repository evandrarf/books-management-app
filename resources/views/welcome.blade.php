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
        <p class="text-gray-500 mt-6">Lakukan pengelolaan buku anda dengan sangat mudah dan aman</p>
        <p class="text-gray-500 text-sm mt-2">Login/Register untuk melanjutkan</p>
    </div>
</div>

@endsection
