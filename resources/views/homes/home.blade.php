@extends('Layouts.Layout')
@section('title','Portafolio Profesional')

@section('content')
<div class="punto-grande"></div>
    <div class="barra-superior">
        <img src="/favicon.ico" alt="Favicon" class="favicon">
        <div class="opciones">
            <a href="{{route('login')}}" class="btn btn-primary">Log In</a>
            <a href="{{route('register')}}" class="btn btn-light">Sign In</a>
            {{-- <a href="{{route('register')}}" class="btn secondary">Sign In</a> --}}
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
        </script>
</div>
@endsection


