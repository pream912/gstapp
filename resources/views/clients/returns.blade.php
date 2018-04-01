@extends('layouts.app')

@section('content')

 {!! Form::open(['action' => ['ClientsController@showReturns', $ids], 'method' => 'POST','enctype' => 'multipart/form-data']) !!}
{{Form::label('month', 'Month')}}
    {{ Form::selectMonth('month') }}
    {{Form::label('year', 'Year')}}
            {{Form::select('year', ['2017' => '2017', '2018' => '2018', '2019' => '2019'])}}
    {{Form::hidden('_method', 'PUT')}}
    {{form::submit('Submit', ['class'=>'btn-primary'])}}
    {!! Form::close() !!}

@endsection