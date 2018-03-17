@extends('layouts.app')

@section('content')
    <h3>File GSTR1</h3>
    {!! Form::open(['action' => ['GstrsController@store1', $clients->id, $refs], 'method' => 'POST','enctype' => 'multipart/form-data']) !!}
        <div class="form-group">
            {{Form::label('gstin', 'GSTIN')}}
            {{Form::text('gstin', '', ['class' => 'form-control', 'placeholder' => $clients->gstin])}}
        </div>
        <div class="form-group">
            {{Form::label('gstr1', 'GSTR1')}}
            {{Form::file('gstr1')}}
        </div>
        {{Form::hidden('_method', 'PUT')}}
                {{form::submit('Submit', ['class'=>'btn-primary'])}}
{!! Form::close() !!}
    
@endsection