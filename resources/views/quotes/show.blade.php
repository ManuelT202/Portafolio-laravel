@extends('Layouts.Layout')

@section('title','Detalle de cotización')

@section('content')
<div class="container">
  <div class="row">
    <div class="col-sm-6">
      <h1>Detalle de cotización</h1>
      <p><strong>Cliente:</strong> {{ Auth::user()->name }}</p>
      <p><strong>Servicio:</strong> {{ $quote->service->name }}</p>
      <p><strong>Descripción:</strong> {{ $quote->service->description }}</p>
      <p><strong>Valor hora:</strong> ${{ number_format($quote->service->hour_value, 2) }}</p>
      <p><strong>Precio por revisión:</strong> ${{ number_format($quote->service->price_per_revision, 2) }}</p>
      <p><strong>Días de entrega:</strong> {{ ceil($quote->estimated_time / $quote->service->time_per_service) }} días</p>
      <p><strong>Costo total:</strong> ${{ number_format($quote->total_price, 2) }}</p>
      <p><strong>Desglose:</strong></p>
      <ul>
        <li><strong>Costo de hora:</strong> ${{ number_format($quote->service->hour_value * $quote->service->time_per_service / 60, 2) }}</li>
        <li><strong>Horas estimadas:</strong> {{ $quote->estimated_time }} horas</li>
        <li><strong>Horas por revisión:</strong> {{ $quote->service->time_per_service }} horas</li>
        <li><strong>Revisiones necesarias:</strong> {{ ceil($quote->estimated_time / $quote->service->time_per_service) }}</li>
        <li><strong>Costo por revisión:</strong> ${{ number_format($quote->service->price_per_revision, 2) }}</li>
        <li><strong>Total:</strong> ${{ number_format($quote->total_price, 2) }}</li>
      </ul>
    </div>
  </div>
</div>

@endsection
