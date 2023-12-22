@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Orders') }}</div>
                        <table class="table">
                            <thead>
                            <tr>
                                <th>Order Number</th>
                                <th>Name</th>
                                <th>Country</th>
                                <th>Payment</th>

                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>{{ $order->id }}</td>
                                <td>{{ $order->name }}</td>
                                <td>{{$order->country->name}}</td>
                                <td>{{$order->payment->name}}</td>
                                <!-- Виведіть інші дані про замовлення -->
                            </tr>
                            </tbody>
                        </table>
                </div>
            </div>
        </div>
    </div>
@endsection
