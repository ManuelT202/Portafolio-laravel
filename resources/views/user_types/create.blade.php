@extends('Layouts.Layout')

@section('title','Tipos de usuario')

@section('content')

<div class="container">
  <div class="row">
    <div class="col-sm-6">
      <h1>Crear tipo de usuario</h1>
      <form method="POST" action="{{ route('user_types.store') }}">
        @csrf
        <div class="mb-3">
          <label for="name" class="form-label">Nombre</label>
          <input type="text" class="form-control" id="name" name="name" required>
        </div>
        <div class="mb-3">
          <label for="description" class="form-label">Descripción</label>
          <input type="text" class="form-control" id="description" name="description" required>
        </div>
        <button type="submit" class="btn btn-primary">Crear</button>
      </form>
    </div>
  </div>
</div>

@endsection
