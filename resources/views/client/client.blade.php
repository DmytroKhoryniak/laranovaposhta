@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Client') }}</div>
                    <a class="btn btn-primary" href="{{route('client.create')}}">create new client</a>
                        <table>
                            <thead>
                            <th>id</th>
                            <th>name</th>
                            <th>role_id</th>
                            </thead>
                            <tbody>
                            @foreach($clients as $client)
                                <tr>
                                <td>{{$client->id}}</td>
                                <td>{{$client->name}}</td>
                                <td>{{$client->role->name}}</td>
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
