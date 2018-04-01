@extends('layouts.app')

@section('content')
    <div class="table-responsive">
            <table class="table table-striped">
            <tbody>
                <tr>
                  <td>{{'Name:'}}</td>
                  <td>{{$gstr->client->bname}}</td>
                </tr>
                <tr>
                  <td>{{'GSTIN:'}}</td>
                  <td>{{$gstr->client->gstin}}</td>
                </tr>
                <tr>
                  <td>{{'Done by:'}}</td>
                  <td>{{$userName}}</td>
                </tr>
                <tr>
                  <td>{{'File:'}}</td>
                  <td><a target="_blank" href="/gstapp/public/storage/gstr1/{{$gstr->gstr1}}">{{$gstr->gstr1}}</a></td>
                </tr>
            </tbody>
            </table>
@endsection