
@extends('layouts.app')

@section('content')
    <h1>Clients</h3>
    <a class="btn btn-success btn-sm" href="/gst/public/clients/create" role="button">Add new</a></p>
    <div class="table-responsive">
            <table class="table table-striped">
              <thead>
                <tr>
                  <th>#</th>
                  <th>Name</th>
                  <th>Business</th>
                  <th>Gstin</th>
                  <th>Phone</th>
                  <th>Email</th>
                  <th> </th>
                  <th> </th>
                </tr>
    @if(count($clients) > 0)
        @foreach($clients as $client)
            
              </thead>
              <tbody>
                <tr>

                  <td>{{$client->id}}</td>
                  <td>{{$client->name}}</td>
                  <td>{{$client->bname}}</td>
                  <td>{{$client->gstin}}</td>
                  <td>{{$client->number}}</td>
                  <td>{{$client->email}}</td>
                  <td><a class="btn btn-success btn-sm" href="/gst/public/clients/create" role="button">Edit</a> </td>
                  <td><a class="btn btn-success btn-sm" href="/gst/public/clients/create" role="button">File returns</a> </td>
                </tr>
                </tbody>
        @endforeach
    @else
        <p>No posts found</p>
    @endif
    </table>
@endsection

