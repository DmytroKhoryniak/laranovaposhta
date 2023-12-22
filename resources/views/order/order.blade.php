@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Orders') }}</div>
                    <a class="btn btn-primary" href="{{route('order.create')}}">create new order</a>
                    <table>
                        <thead>
                        <th>id</th>
                        <th>name</th>
                        <th>country</th>
                        <th>payment</th>
                        </thead>
                        <tbody>
                        @foreach($orders as $order)
                            <tr>
                                <td>{{$order->id}}</td>
                                <td>{{$order->name}}</td>
                                <td>{{$order->country->name}}</td>
                                <td>{{$order->payment->name}}</td>
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
