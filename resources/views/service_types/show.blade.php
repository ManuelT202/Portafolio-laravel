@extends('Layouts.Layout')

@section('title','Detalle del tipo de servicio')

@section('content')
<div class="container">
  <div class="row">
    <div class="col-sm-6">
      <h1>Detalle del tipo de servicio</h1>
      <p><strong>Nombre:</strong> {{ $service_type->name }}</p>
      <p><strong>Descripción:</strong> {{ $service_type->description }}</p>
      <p><strong>Tiempo estimado:</strong> {{ $service_type->estimated_time }} horas</p>
      <p><strong>Tiempo por revisión:</strong> {{ $service_type->time_per_revision }} horas</p>
    </div>
  </div>
</div>

@endsection

