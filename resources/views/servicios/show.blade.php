@extends('Layouts.Layout')

@section('title','Detalle del servicio')

@section('content')
<div class="container" style="margin-top: 15vw">
  <div class="row justify-content-center">
    <div class="col-sm-6">
      <h1>Detalle del servicio</h1>
      <p><strong>Nombre:</strong> {{ $service->name }}</p>
      <p><strong>Descripción:</strong> {{ $service->description }}</p>
      <p><strong>Valor hora:</strong> ${{ number_format($service->hour_value, 2) }}</p>
      <p><strong>Precio por revisión:</strong> ${{ number_format($service->price_per_revision, 2) }}</p>
      <p><strong>Tipo de servicio:</strong> {{ $service->service_type_id }}</p>
    </div>
  </div>
</div>

@endsection



