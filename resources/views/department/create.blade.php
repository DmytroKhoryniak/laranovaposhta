@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Create Department') }}</div>
                    <form action="{{route('department.store')}}" method="post">
                        @csrf
                        <input type="text" name="name" id="name">
                        @error('name')
                        <p>{{$message}}</p>
                        @enderror
{{--                        <select name="role_id" id="role">--}}
{{--                            @foreach($roles as $role)--}}
{{--                                <option value="{{$role->id}}">{{$role->name}}</option>--}}
{{--                            @endforeach--}}
{{--                        </select>--}}
{{--                        @error('role')--}}
{{--                        <p>{{$message}}</p>--}}
{{--                        @enderror--}}
                        <input class="btn btn-primary" type="submit" name="department_add" value="Create">
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
