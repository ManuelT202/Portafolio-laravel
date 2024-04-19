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
                                <td>{{ $quote->user->name }}</td>
                                <td>{{ $quote->service->name }}</td>
                                <td>
                                    @php
                                        $time_estimated = $quote->service_type->estimated_time;
                                        $time_per_revision = $quote->service_type->time_per_revision;
                                        $total_time = $time_estimated + ($time_per_revision * $quote->number_of_revisions);
                                    @endphp
                                    {{ $total_time }} horas
                                </td>
                                <td>
                                    @php
                                        $hour_value = $quote->service->hour_value;
                                        $price_per_revision = $quote->service->price_per_revision;
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

