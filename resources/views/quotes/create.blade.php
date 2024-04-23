@extends('Layouts.Layout')

@section('title','Crear cotización')

@section('content')

<div class="container" style="margin-top: 15vw">
  <div class="row justify-content-center">
    <div class="col-sm-6">
      <h1>Crear cotización</h1>
      <form method="POST" action="{{ route('quotes.store') }}">
        @csrf
        <div class="mb-3">
          <label for="number_of_revisions" class="form-label">Número de revisiones</label>
          <input type="number" class="form-control" id="number_of_revisions" name="number_of_revisions" required>
        </div>
        <div class="mb-3">
          <label for="service_id" class="form-label">Servicio</label>
          <select class="form-select" name="service_id" id="service_id" required>
            @foreach ($services as $service)
              <option value="{{ $service->id }}">{{ $service->name }}</option>
            @endforeach
          </select>
        </div>
          <button type="submit" class="btn btn-primary">Crear</button>
      </form>
    </div>
  </div>
</div>

@endsection


