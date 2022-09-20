@extends('layouts.app')
@section('title', 'Pagina niet gevonden | I.Mohamed - Portfolio')

@section('content')
    <div class="w-full h-screen flex flex-col justify-center items-center space-y-5">
        <h1 class="text-6xl text-redPrimary font-bold">404</h1>
        <h3 class="text-3xl">Pagina niet gevonden!</h3>
        <p>URL van de pagina was niet gevonden. Probeer andere pagina :)</p>
        <a href="/" class="p-2 bg-redPrimary text-white rounded-md">Home</a>
        <a class="pointer relative btn-nav outline-none after:content-[''] after:absolute after:w-full after:h-[0.175rem] after:left-0 after:bottom-0 after:bg-redPrimary btn-hover" href="mailto:d206947@edu.curio.nl">Contact me</a>
    </div>
@endsection