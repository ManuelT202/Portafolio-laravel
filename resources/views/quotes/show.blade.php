@extends('Layouts.Layout')

@section('title','Detalle de cotización')

@section('content')
<div class="container">
  <div class="row justify-content-center">
    <div class="col-sm-6">
      <h1>Detalle de cotización</h1>
      <p><strong>Cliente:</strong> {{ $users->find($quotes[0]->user_id)->name }}</p>
      <p><strong>Número de revisiones:</strong> {{ $quotes[0]->number_of_revisions }}</p>
      <p><strong>Servicio:</strong> {{ $services->find($quotes[0]->service_id)->name }}</p>
      <p><strong>Detalles de la cotización:</strong></p>
      <ul>
        <li><strong>Tiempo estimado:</strong> {{ $service_types->find($services->find($quotes[0]->service_id)->service_type_id)->estimated_time }} horas</li>
        <li><strong>Tiempo por revisión:</strong> {{ $service_types->find($services->find($quotes[0]->service_id)->service_type_id)->time_per_revision }} horas</li>
        <li><strong>Horas de trabajo:</strong> {{ $service_types->find($services->find($quotes[0]->service_id)->service_type_id)->estimated_time + ($service_types->find($services->find($quotes[0]->service_id)->service_type_id)->time_per_revision * $quotes[0]->number_of_revisions) }} horas</li>
        <li><strong>Precio por hora:</strong> ${{ number_format($services->find($quotes[0]->service_id)->hour_value, 2) }}</li>
        <li><strong>Precio por revisión:</strong> ${{ number_format($services->find($quotes[0]->service_id)->price_per_revision, 2) }}</li>
        <li><strong>Total:</strong> ${{ number_format($services->find($quotes[0]->service_id)->hour_value * ($service_types->find($services->find($quotes[0]->service_id)->service_type_id)->estimated_time + ($service_types->find($services->find($quotes[0]->service_id)->service_type_id)->time_per_revision * $quotes[0]->number_of_revisions)) + $services->find($quotes[0]->service_id)->price_per_revision * $quotes[0]->number_of_revisions, 2) }}</li>
      </ul>
      {{-- <form method="POST" action="{{ route('quotes.download', ['quote' => $quotes[0]->id]) }}">
        @method('PUT')
        @csrf
        <div class="row">
          <div class="col-sm-6">
            <input type="submit" value="Descargar detalles de cotización" class="btn btn-success">
          </div>
        </div> --}}
      </form>
      <form action="{{ route('quotes.create') }}" method="GET">
        @csrf
        <div class="row">
          <div class="col-sm-6">
            <input type="submit" value="Volver a cotizar" class="btn btn-secondary">
          </div>
        </div>
      </form>
    </div>
</div>

@endsection