@extends('layouts.app')

@section('content')

{!! Form::open(['action' => 'GstrsController@index1', 'method' => 'POST']) !!}
{{Form::label('month', 'Month')}}
    {{ Form::selectMonth('month') }}
    {{Form::label('year', 'Year')}}
            {{Form::select('year', ['2017' => '2017', '2018' => '2018', '2019' => '2019'])}}
    {{form::submit('Submit', ['class'=>'btn-primary'])}}
    {!! Form::close() !!}

@endsection