@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Create Order') }}</div>
                    <form action="{{route('order.store')}}" method="post">
                        @csrf
                        <input type="text" name="name" id="name">
                        @error('name')
                        <p>{{$message}}</p>
                        @enderror
                        <select name="country_id" id="country">
                            @foreach($countries as $country)
                                <option value="{{$country->id}}">{{$country->name}}</option>
                            @endforeach
                        </select>
                        <select name="payment_id" id="payment">
                            @foreach($payments as $payment)
                                <option value="{{$payment->id}}">{{$payment->name}}</option>
                            @endforeach
                        </select>
                        @error('status')
                        <p>{{$message}}</p>
                        @enderror
                        <input class="btn btn-primary" type="submit" name="order_add" value="Create">
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
