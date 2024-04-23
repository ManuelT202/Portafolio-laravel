@extends('Layouts.Layout')

@section('title','Tipos de servicios')

@section('content')

<div class="container" style="margin-top: 15vw">
  <div class="row justify-content-center">
    <div class="col-sm-6">
      <h1>Crear tipo de servicio</h1>
      <form method="POST" action="{{ route('service_types.store') }}">
        @csrf
        <div class="mb-3">
          <label for="name" class="form-label">Nombre</label>
          <input type="text" class="form-control" id="name" name="name" required>
        </div>
        <div class="mb-3">
          <label for="description" class="form-label">Descripción</label>
          <input type="text" class="form-control" id="description" name="description" required>
        </div>
        <div class="mb-3">
          <label for="estimated_time" class="form-label">Tiempo estimado</label>
          <input type="number" class="form-control" id="estimated_time" name="estimated_time" required>
        </div>
        <div class="mb-3">
          <label for="time_per_revision" class="form-label">Tiempo por revision</label>
          <input type="number" class="form-control" id="time_per_revision" name="time_per_revision" required>
        </div>
          <button type="submit" class="btn btn-primary">Crear</button>
      </form>
    </div>
  </div>
</div>

@endsection

