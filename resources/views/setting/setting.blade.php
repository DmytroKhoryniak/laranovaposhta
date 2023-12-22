@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Settings') }}</div>
                    <a class="btn btn-primary" href="{{route('setting.create')}}">create new setting</a>
                    <table>
                        <thead>
                        <th>id</th>
                        <th>name</th>
                        </thead>
                        <tbody>
                        @foreach($settings as $setting)
                            <tr>
                                <td>{{$setting->id}}</td>
                                <td>{{$setting->name}}</td>
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
