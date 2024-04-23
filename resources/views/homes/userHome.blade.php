@extends('Layouts.Layout')
@section('title','Portafolio Profesional')

@section('content')
<div class="punto-grande"></div>
    <div class="barra-superior">
        <img src="/favicon.ico" alt="Favicon" class="favicon">
        <button id="abrir-menu" class="btn btn-secundario boton-abrir-menu">&#9776;</button>
        <div id="menu-lateral" class="menu-lateral">
            <ul>
                <li><a href="{{route('home')}}" class="enlace-menu">Home</a></li>
                {{-- <li><a href="{{route('#')}}" class="enlace-menu">Dashboard</a></li> --}}
                <li><a href="{{route('quotes.create')}}" class="enlace-menu">Crear cotización</a></li>
                {{-- <li><a href="{{route('#')}}" class="enlace-menu">Contactar</a></li>
                {{-- <li><a href="{{route('#')}}" class="enlace-menu">Historial de cotizaciones</a></li> --}}
                {{-- <li><a href="{{route('#')}}" class="enlace-menu">Settings</a></li> --}}
                {{-- <li><a href="{{route('#')}}" class="enlace-menu">Sobre nosotros</a></li> --}}
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
        <div class="dropdown">
        <div class="barra-lateral">
            <ul>
                <li><a href="#">Log In</a></li>
                <li><a href="#">Sign In</a></li>
                <li><a href="{{route('quotes.create')}}">Crear cotización</a></li>
                <li><a href="{{route('quotes.index')}}">Historial de cotizaciones</a></li> --}}
                {{-- <li><a href="{{route('users.settings')}}">Settings</a></li>
                {{-- <li><a href="{{route('logout')}}">Logout</a></li> --}}
            {{-- </ul>
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
            </div> --}}
