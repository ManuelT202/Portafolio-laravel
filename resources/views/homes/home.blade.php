@extends('Layouts.Layout')
@section('title','Portafolio Profesional')

@section('styles')

@section('content')
<div class="punto-grande"></div>
    <div class="barra-superior">
        <img src="/favicon.ico" alt="Favicon" class="favicon">
        <div class="opciones">
            <a href="#" class="btn btn-primary">Log In</a>
            <a href="#" class="btn btn-secondary">Sign In</a>
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

        

{{-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>@yield('title')</title>

    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Figtree:wght@400;500;600;700&display=swap">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/water.css@2/out/water.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <style>
        body {
            background-color: rgb(18, 18, 20);
            position: relative;
        }

        .punto-grande {
            position: absolute;
            top: 20px;
            left: -15vw;
            width: 30vw;
            height: 30vw;
            background: linear-gradient(to right, rgb(255, 0, 38) 0%, rgba(145, 10, 0, 0.808) 100%);
            background: radial-gradient(circle at 0% 0%, rgb(255, 0, 38) 0%, rgba(145, 10, 0, 0.37) 100%);
            border-radius: 100%;
            filter: blur(100px);
            z-index: -1;
        }

        .barra-superior {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            background-color: rgba(0, 0, 0, 0.5);
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 10px 20px;
        }

        .barra-superior .favicon {
            width: 30px;
            height: 30px;
        }

        .barra-superior .opciones {
            display: flex;
            gap: 10px;
        }

        .portafolio-profesional {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 20px;
            padding: 20px;
        }

        .contenedor-portafolio {
            background-color: rgb(21, 21, 24);
            background-image: linear-gradient(to bottom right, rgb(21, 21, 32) 0%, rgb(56, 56, 64) 100%);
            box-shadow: 0px 5px 10px rgba(0, 0, 0, 0.2);
            padding: 20px;
            border-radius: 10px;
            overflow: hidden;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            align-items: center;
            text-align: center;
            position: relative;            
        }

        .contenedor-portafolio img {
            width: 100%;
            height: auto;
            object-fit: cover;
            box-shadow: 10px 10px 0px rgba(0, 0, 0, 0.2);
            border-radius: 10px;
        }
    </style>
</head>
<body>
    <div class="punto-grande"></div>

    <div class="barra-superior">
        <img src="/favicon.ico" alt="Favicon" class="favicon">
        <div class="opciones">
            <a href="#" class="btn btn-primary">Log In</a>
            <a href="#" class="btn btn-secondary">Sign In</a>
        </div>
    </div>

    <div class="container">
        <h1 class="text-center text-white">Portafolio Profesional</h1>

        <div class="portafolio-profesional">
            <div class="contenedor-portafolio">
                <img src="https://placehold.co/300x200" alt="Imagen de proyecto 1">
            </div>
            <div class="contenedor-portafolio --}}


{{-- 
@extends('Layouts.Layout')

@section('content')
<div class="fondo-negro borde-rojo contenedor-redondeado centrado">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="card-columns">
                    <home-card class="contenedor-redondeado">
                        <img class="card-img-top" src="{{ asset('images/baño.png') }}" alt="Andar a caminar">
                        <div class="card-body">
                            <h5 class="card-title">Andar a caminar</h5>
                            <p class="card-text">Imagen tomada en el parque de la Maestranza, Sevilla.</p>
                        </div>
                    </home-card>
                    <home-card class="contenedor-redondeado">
                        <img class="card-img-top" src="{{ asset('images/BeyondGoodAndEvil_04.jpg') }}" alt="Alborea">
                        <div class="card-body">
                            <h5 class="card-title">Alborea</h5>
                            <p class="card-text">Imagen tomada en la playa de Alborea, Marbella.</p>
                        </div>
                    </home-card>
                    <home-card class="contenedor-redondeado">
                        <img class="card-img-top" src="{{ asset('images/Casa MM.png') }}" alt="Alhambra">
                        <div class="card-body">
                            <h5 class="card-title">Alhambra</h5>
                            <p class="card-text">Imagen tomada en la Alhambra, Granada.</p>
                        </div>
                    </home-card>
                    <home-card class="contenedor-redondeado">
                        <img class="card-img-top" src="{{ asset('images/E.png') }}" alt="Cerro de los Cingles">
                        <div class="card-body">
                            <h5 class="card-title">Cerro de los Cingles</h5>
                            <p class="card-text">Imagen tomada en el Cerro de los Cingles, Málaga.</p>
                        </div>
                    </home-card>
                    <home-card class="contenedor-redondeado">
                        <img class="card-img-top" src="{{ asset('images/primerpiso CMM.png') }}" alt="Puente Viejo">
                        <div class="card-body">
                            <h5 class="card-title">Puente Viejo</h5>
                            <p class="card-text">Imagen tomada en el Puente Viejo, Sevilla.</p>
                        </div>
                    </home-card>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

 --}}
