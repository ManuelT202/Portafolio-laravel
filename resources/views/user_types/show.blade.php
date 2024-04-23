@extends('Layouts.Layout')

@section('title','Detalle del tipo de usuario')

@section('content')
<div class="container" style="margin-top: 15vw">
  <div class="row justify-content-center">
    <div class="col-sm-6">
      <h1>Detalle del tipo de usuario</h1>
      <p><strong>Nombre:</strong> {{ $user_type->name }}</p>
      <p><strong>Descripción:</strong> {{ $user_type->description }}</p>
    </div>
  </div>
</div>

@endsection
