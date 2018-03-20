@extends('layouts.app')

@section('content')
    <h3>File GSTR2</h3>
    {!! Form::open(['action' => ['GstrsController@store2', $gstrs->id], 'method' => 'POST','enctype' => 'multipart/form-data']) !!}
    <div class="form-group">
        {{Form::label('gstin', 'GSTIN')}}
        {{Form::text('gstin', '', ['class' => 'form-control', 'placeholder' =>$gstrs->client->gstin])}}
    </div>
    <div class="form-group">
        {{Form::label('gstr2', 'GSTR2')}}
        {{Form::file('gstr2')}}
    </div>
    {{Form::hidden('_method', 'PUT')}}
            {{form::submit('Submit', ['class'=>'btn-primary'])}}
{!! Form::close() !!}
    
@endsection