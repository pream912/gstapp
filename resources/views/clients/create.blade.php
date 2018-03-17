@extends('layouts.app')

@section('content')
    <h1>Add client</h3>
    {!! Form::open(['action' => 'ClientsController@store', 'method' => 'POST']) !!}
        <div class="form-group">
            {{Form::label('name', 'Name')}}
            {{Form::text('name', '', ['class' => 'form-control', 'placeholder' => 'Client name'])}}
        </div>
        <div class="form-group">
            {{Form::label('bname', 'Business Name')}}
            {{Form::text('bname', '', ['class' => 'form-control', 'placeholder' => 'eg. Apple inc'])}}
        </div>
        <div class="form-group">
            {{Form::label('gstin', 'Gstin')}}
            {{Form::text('gstin', '', ['class' => 'form-control', 'placeholder' => 'GSTIN'])}}
        </div>
        <div class="form-group">
            {{Form::label('type', 'Business Type')}}
            {{Form::select('type', ['PR' => 'Proprietorship', 'P' => 'Partnership', 'LLP' => 'LLP', 'LLC' => 'LLC', 'PL' => 'Private. Ltd.'])}}
        </div>
        <div class="form-group">
            {{Form::label('pan', 'PAN no.')}}
            {{Form::text('pan', '', ['class' => 'form-control', 'placeholder' => 'PAN no.'])}}
        </div>
        <div class="form-group">
            {{Form::label('number', 'Contact no')}}
            {{Form::text('number', '', ['class' => 'form-control', 'placeholder' => 'eg, 9999999999'])}}
        </div>
        <div class="form-group">
            {{Form::label('email', 'Email')}}
            {{Form::text('email', '', ['class' => 'form-control', 'placeholder' => 'eg, pream@gmail.com'])}}
        </div>
        {{form::submit('Submit', ['class'=>'btn-primary'])}}
{!! Form::close() !!}
    
@endsection