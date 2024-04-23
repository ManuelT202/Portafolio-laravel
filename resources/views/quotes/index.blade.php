@extends('layouts.layout')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Lista de cotizaciones</div>

                <div class="card-body">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Revisiones</th>
                                <th>Cliente</th>
                                <th>Servicio</th>
                                <th>Horas de trabajo</th>
                                <th>Total</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($quotes as $quote)
                            <tr>
                                <td>{{ $quote->id }}</td>
                                <td>{{ $quote->number_of_revisions }}</td>
                                <td>{{ $users->find($quote->user_id)->name }}</td>
                                <td>{{ $services->find($quote->service_id)->name }}</td>
                                <td>
                                    @php
                                        $serviceType = $service_types->find($services->find($quote->service_id)->service_type_id);
                                        $total_time = $serviceType->estimated_time + ($serviceType->time_per_revision * $quote->number_of_revisions);
                                    @endphp
                                    {{ $total_time }} horas
                                </td>
                                <td>
                                    @php
                                        $hour_value = $services->find($quote->service_id)->hour_value;
                                        $price_per_revision = $services->find($quote->service_id)->price_per_revision;
                                        $total_price = $hour_value * $total_time + $price_per_revision * $quote->number_of_revisions;
                                    @endphp
                                    ${{ number_format($total_price, 2) }}
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection



