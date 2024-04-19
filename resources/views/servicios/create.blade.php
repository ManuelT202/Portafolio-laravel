@extends('Layouts.Layout')

@section('title','Crear servicio')

@section('content')

<div class="container">
  <div class="row">
    <div class="col-sm-6">
      <h1>Crear servicio</h1>
      <form method="POST" action="{{ route('services.store') }}">
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
          <label for="hour_value" class="form-label">Valor hora</label>
          <input type="number" step="any" class="form-control" id="hour_value" name="hour_value" required>
        </div>
        <div class="mb-3">
          <label for="service_type_id" class="form-label">Tipo de servicio</label>
          <select class="form-select" name="service_type_id" id="service_type_id" required>
            @foreach ($service_types as $service_type)
              <option value="{{ $service_type->id }}">{{ $service_type->name }}</option>
            @endforeach
          </select>
        </div>
        <div class="mb-3">
          <label for="price_per_revision" class="form-label">Precio por revisión</label>
          <input type="number" step="any" class="form-control" id="price_per_revision" name="price_per_revision" required>
        </div>
          <button type="submit" class="btn btn-primary">Crear</button>
      </form>
    </div>
  </div>
</div>

@endsection

