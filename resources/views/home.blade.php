@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <!-- Бокове меню -->
            <div class="col-md-3 text-light bg-red">
                <div class="list-group">
                    <a href="{{ route('client') }}" class="list-group-item">Clients</a>
                    <a href="{{ route('country') }}" class="list-group-item">Countries</a>
                    <a href="{{ route('department') }}" class="list-group-item">Departments</a>
                    <a href="{{ route('order') }}" class="list-group-item">Orders</a>
                    <a href="{{ route('payment') }}" class="list-group-item">Payments</a>
                    <a href="{{ route('role') }}" class="list-group-item">Roles</a>
                    <a href="{{ route('setting') }}" class="list-group-item">Rules</a>
                    <a href="{{ route('status') }}" class="list-group-item">Statuses</a>
                </div>
            </div>
            <!-- Зміст сторінки -->
            <div class="col-md-9">
                <div class="row">
                    <!-- Зміна курсу валют -->
                    <div class="col-md-6">
                        <div class="card">
                            <div class="card-header bg-secondary text-white">{{ __('Currency Exchange Rate') }}</div>

                            <div class="card-body">
                                <div class="row mb-4">
                                    <div class="">
                                        <div class="card bg-light">
                                            <div class="card-header">Exchange Rate</div>
                                            <div class="card-body">
                                                <div class="row">
                                                    <div class="col-md-4">USD</div>
                                                    <div class="col-md-4">EUR</div>
                                                    <div class="col-md-4">GBP</div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-4">0.89</div>
                                                    <div class="col-md-4">0.75</div>
                                                    <div class="col-md-4">1.27</div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-4">CAD</div>
                                                    <div class="col-md-4"></div>
                                                    <div class="col-md-4"></div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-4">09:52</div>
                                                    <div class="col-md-4"></div>
                                                    <div class="col-md-4"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Дослідження місячних даних -->
                    <div class="col-md-6">
                        <div class="card">
                            <div class="card-header bg-info text-white">{{ __('Monthly Data Analysis') }}</div>

                            <div class="card-body">
                                <div class="row">
                                    <div class="">
                                        <div class="card bg-light">
                                            <div class="card-header">Income and Outgoings</div>
                                            <div class="card-body">
                                                <table class="table table-sm table-bordered">
                                                    <tr>
                                                        <th>Income</th>
                                                        <th>Outgoings</th>
                                                    </tr>
                                                    <tr>
                                                        <td>1200</td>
                                                        <td>1000</td>
                                                    </tr>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Панель інформації -->
                <div class="card mt-6 bg-primary text-white">
                    <div class="card-header">{{ __('Dashboard') }}</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif
                        {{ __('You are logged in!') }}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
