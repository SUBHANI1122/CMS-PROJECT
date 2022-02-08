@extends('layouts.custome_app')
@section('content')
    @include('components.breadcomes')
    <div class="card card-custom">
        <div class="container">
            <div class="card card-custom">
                <div class="card card-body">
                    {!! Form::model($model, ['method' => 'POST', 'route' => [$route.".store"], 'files' => true, 'id' => 'form']) !!}
                    @include($route.'._form')
                    <div class="card-footer">
                        {!! Form::submit('Save', ['class' => 'btn btn-success']) !!}
                    </div>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
@endsection
