@extends('layouts.layout')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Lista de tipos de usuarios</div>

                <div class="card-body">
                    <a href="{{ route('user_types.create') }}">Crear nuevo tipo usuario</a>
                    <ul>
                        @foreach ($user_types as $user_type)
                        <li>
                            <a href="{{ route('user_types.show', $user_type->id) }}">{{ $user_type->name }}</a>
                        </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
