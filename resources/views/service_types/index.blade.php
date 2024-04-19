@extends('layouts.layout')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Lista de tipos de servicio</div>

                <div class="card-body">
                    <a href="{{ route('service_types.create') }}">Crear nuevo tipo de servicio</a>
                    <ul>
                        @foreach ($service_types as $service_type)
                        <li>
                            <a href="{{ route('service_types.show', $service_type->id) }}">{{ $service_type->name }}</a>
                        </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

