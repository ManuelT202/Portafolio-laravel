@extends('Layouts.Layout')

@section('title','Detalle del usuario')

@section('content')
<div class="container" style="margin-top: 15vw">
  <div class="row justify-content-center">
    <div class="col-sm-6">
      <h1>Detalle del usuario</h1>
      <p><strong>Nombre:</strong> {{ $user->name }}</p>
      <p><strong>Email:</strong> {{ $user->email }}</p>
      <p><strong>Tipo de usuario:</strong> {{ $user_types->find($user->user_type_id)->name }}</p>
    </div>
  </div>
</div>

@endsection

