@extends('layouts.app-master')

@section('content')
    <h1 class="container">Home</h1>
    
    @auth
        <p>Bienvenido {{auth()->user()->name}}, estas autenticado al sitio web</p>
    @endauth

    @guest
        <p>Para visualizar <a href="/login">inicia sesion</a></p>
    @endguest

@endsection