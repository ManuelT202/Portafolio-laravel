@extends('layouts.layout')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Lista de servicios</div>

                <div class="card-body">
                    <a href="{{ route('services.create') }}">Crear nuevo servicio</a>
                    <ul>
                        @foreach ($services as $service)
                        <li>
                            <a href="{{ route('services.show', $service) }}">{{ $service->name }}</a>
                        </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection




    