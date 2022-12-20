@extends('templates.partials.structure')

@section('body')
@include('templates.partials.navbar')
<div class="p-10 min-h-full">
    <h1 class="text-xl">{{$title ?? "Pengelolaan Buku"}}</h1>

    @yield('content')
</div>
@endsection
