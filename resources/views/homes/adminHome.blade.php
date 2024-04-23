@extends('Layouts.Layout')
@section('title','Portafolio Profesional')

@section('content')
<div class="punto-grande"></div>
    <div class="barra-superior">
        <img src="/favicon.ico" alt="Favicon" class="favicon">
        <button id="abrir-menu" class="btn btn-secundario boton-abrir-menu">&#9776;</button>
        <div id="menu-lateral" class="menu-lateral">
            <ul>
                {{-- <li><a href="{{route('home')}}" class="enlace-menu">Home</a></li> --}}
                {{-- <li><a href="{{route('#')}}" class="enlace-menu">Dashboard</a></li> --}}
                <li><a href="{{route('users.index')}}" class="enlace-menu">Lista de usuarios</a></li>
                <li><a href="{{route('user_types.index')}}" class="enlace-menu">Tipos de usuario</a></li>
                <li><a href="{{route('service_types.index')}}" class="enlace-menu">Tipos de servicio</a></li>
                <li><a href="{{route('services.index')}}" class="enlace-menu">Lista de servicios</a></li>
                <li><a href="{{route('quotes.index')}}" class="enlace-menu">Cotizaciones</a></li>
                {{-- <li><a href="{{route('#')}}" class="enlace-menu">modificar contacto</a></li>
                {{-- <li><a href="{{route('#')}}" class="enlace-menu">Settings</a></li> --}}
                <li><a href="{{route('logout')}}" class="enlace-menu">Logout</a></li>
            </ul>
        </div>

    </div>
    <div class="container">
        <h1 class="text-center text-white">Portafolio Profesional</h1>

        <div class="portafolio-profesional">
            <div class="contenedor-portafolio" onclick="mostrarDetalles(1)">
                <img src="https://placehold.co/300x200" alt="Imagen de proyecto 1">
            </div>
            <div class="contenedor-portafolio" onclick="mostrarDetalles(2)">
                <img src="https://placehold.co/300x200" alt="Imagen de proyecto 2">
            </div>
            <div class="contenedor-portafolio" onclick="mostrarDetalles(3)">
                <img src="https://placehold.co/300x200" alt="Imagen de proyecto 3">
            </div>
            <div class="contenedor-portafolio" onclick="mostrarDetalles(4)">
                <img src="https://placehold.co/300x200" alt="Imagen de proyecto 4">
            </div>
            <div class="contenedor-portafolio" onclick="mostrarDetalles(5)">
                <img src="https://placehold.co/300x200" alt="Imagen de proyecto 5">
            </div>

            <div class="detalles-proyecto" id="detalles-proyecto-1">
                <div class="cerrar-detalles" onclick="minimizarDetalles(1)">X</div>
                <img src="https://placehold.co/1920x1080" alt="Detalles del proyecto 1">
            </div>
            <div class="detalles-proyecto" id="detalles-proyecto-2">
                <div class="cerrar-detalles" onclick="minimizarDetalles(2)">X</div>
                <img src="https://placehold.co/1920x1080" alt="Detalles del proyecto 2">
            </div>
            <div class="detalles-proyecto" id="detalles-proyecto-3">
                <div class="cerrar-detalles" onclick="minimizarDetalles(3)">X</div>
                <img src="https://placehold.co/1920x1080" alt="Detalles del proyecto 3">
            </div>
            <div class="detalles-proyecto" id="detalles-proyecto-4">
                <div class="cerrar-detalles" onclick="minimizarDetalles(4)">X</div>
                <img src="https://placehold.co/1920x1080" alt="Detalles del proyecto 4">
            </div>
            <div class="detalles-proyecto" id="detalles-proyecto-5">
                <div class="cerrar-detalles" onclick="minimizarDetalles(5)">X</div>
                <img src="https://placehold.co/1920x1080" alt="Detalles del proyecto 5">
            </div>
        </div>

    </div>

    <script>
        function mostrarDetalles(numeroProyecto) {
            let detalles = document.getElementById("detalles-proyecto-" + numeroProyecto);
            let otrosDetalles = document.querySelectorAll(".detalles-proyecto:not(#detalles-proyecto-" + numeroProyecto + ")");

            otrosDetalles.forEach(detalle => {
                detalle.style.display = "none";
            });

            if (detalles.style.display === "block") {
                detalles.style.display = "none";
            } else {
                detalles.style.display = "block";
            }
        }

        function minimizarDetalles(numeroProyecto) {
            let detalles = document.getElementById("detalles-proyecto-" + numeroProyecto);

            if (detalles.style.display === "block") {
                detalles.style.display = "none";
            }
        }

        document.getElementById("abrir-menu").addEventListener("click", function() {
            document.querySelector(".menu-lateral").classList.toggle("abierto");
            document.querySelector(".contenido").classList.toggle("abierto");
            document.querySelector(".boton-abrir-menu").classList.toggle("abierto");
        });
    </script>
@endsection







{{-- @extends('Layouts.Layout')
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
                <a class="dropdown-item" href="#">Logout</a> --}}
                {{-- <a class="dropdown-item" href="{{route('quotes.create')}}">Crear cotización</a>
                <a class="dropdown-item" href="{{route('quotes.index')}}">Historial de cotizaciones</a>
                <a class="dropdown-item" href="{{route('users.settings')}}">Settings</a>
                <a class="dropdown-item" href="{{route('logout')}}">Logout</a> --}}
            {{-- </div>
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

 --}}
