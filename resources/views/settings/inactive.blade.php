
@extends('layouts.app')

@section('content')
    <h1>Inactive records</h3>
    <div class="table-responsive">
            <table class="table table-striped">
              <thead>
                <tr>
                
                  <th>Business</th>
                  <th>Gstin</th>
                  <th>Ref</th>
                  <th> </th>
                </tr>
    @if(count($gstrs) > 0)
        @foreach($gstrs as $gstr)
            
              </thead>
              <tbody>
                <tr>
                  <td>{{$gstr->client->bname}}</td>
                  <td>{{$gstr->client->gstin}}</td>
                  <td>{{$gstr->ref}}</td>
                  <td> <a class="btn btn-success btn-sm" href="/gstapp/public/settings/{{$gstr->id}}" role="button">Set active</a> </td>

                </tr>
                </tbody>
        @endforeach
    @else
        <p>No records found</p>
    @endif
    </table>
@endsection

