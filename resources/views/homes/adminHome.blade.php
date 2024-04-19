@extends('Layouts.Layout')
@section('title','Portafolio Profesional')

@section('styles')

@section('content')
<div class="punto-grande"></div>
    <div class="barra-superior">
        <img src="/favicon.ico" alt="Favicon" class="favicon">
        <div id="menu-desplegable" class="dropdown">
            <a class="btn btn-secondary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Menu
            </a>

            <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                
                <img src="https://via.placeholder.com/160" class="dropdown-item">
                <img src="https://via.placeholder.com/100" class="dropdown-item">
                <img src="https://via.placeholder.com/150" class="dropdown-item">
                <a href="#" class="btn btn-primary">Log In</a>
                <a href="#" class="btn btn-secondary">Sign In</a>
                <a class="dropdown-item" href="#">Crear cotización</a>
                <a class="dropdown-item" href="#">Historial de cotizaciones</a>
                <a class="dropdown-item" href="#">Settings</a>
                <a class="dropdown-item" href="#">Logout</a>
                {{-- <a class="dropdown-item" href="{{route('quotes.create')}}">Crear cotización</a>
                <a class="dropdown-item" href="{{route('quotes.index')}}">Historial de cotizaciones</a>
                <a class="dropdown-item" href="{{route('users.settings')}}">Settings</a>
                <a class="dropdown-item" href="{{route('logout')}}">Logout</a> --}}
            </div>
        </div>
    </div>
    <div class="container">
        <h1 class="text-center text-white">Portafolio Profesional</h1>

        <div class="portafolio-profesional">
            <div class="contenedor-portafolio">
                <img src="https://placehold.co/300x200" alt="Imagen de proyecto 1">
            </div>
            <div class="contenedor-portafolio">
                <img src="https://placehold.co/300x200" alt="Imagen de proyecto 2">
            </div>
            <div class="contenedor-portafolio">
                <img src="https://placehold.co/300x200" alt="Imagen de proyecto 3">
            </div>
            <div class="contenedor-portafolio">
                <img src="https://placehold.co/300x200" alt="Imagen de proyecto 4">
            </div>
            <div class="contenedor-portafolio">
                <img src="https://placehold.co/300x200" alt="Imagen de proyecto 5">
            </div>


