@extends('layouts.app')

@section('content')

<div class="table-responsive">
    <table class="table table-striped">
      <thead>
        <tr>
          <th>Business Name</th>
          <th>GSTIN</th>
          <th>GSTR 1</th>
          <th>GSTR 2</th>
          <th>GSTR 3</th>
          <th>Status</th>
          <th> </th>
        </tr>
    </thead>
    <tbody>
@if(count($gstrs) > 0)
@foreach($gstrs as $gstr)




    
    <tr>

      <td>{{$gstr->client->bname}}</td>
      <td>{{$gstr->client->gstin}}</td>


    
      
          <td>
          @if($gstr->gstr1 == '')
          
          <a href="/gstapp/public/gstrs/{{$gstr->client->id}}/gstr1">
            Pending
            </a>
          
          @else
          
          {{$gstr->gstr1}}
          
          @endif
          </td>
          <td>
          @if($gstr->gstr2 == '')
          
          <a href="/gstapp/public/gstrs/{{$gstr->id}}/gstr2">
            Pending
            </a>
          
          @else
          
          {{$gstr->gstr2}}
         
          @endif</td>
          <td>
          @if($gstr->gstr3 == '')
          
          <a href="/gstapp/public/gstrs/{{$gstr->id}}/gstr3">
            Pending
            </a>
          
          @else
          
          {{$gstr->gstr3}}
          
          @endif</td>
          
         <td>
         @if($gstr->gstr1 && $gstr->gstr2 && $gstr->gstr3 != '')
         Done
         @else
         Pending
         @endif
         </td>
         <td> </td>
         
    

</tr>

@endforeach
@else
<p>No posts found</p>
@endif

@if(count($clients) > 0)
@foreach($clients as $client)
    <tr>
      <td>{{$client->bname}}</td>
      <td>{{$client->gstin}}</td>
    <td> <a href="/gstapp/public/gstrs/{{$client->id}}/{{$refs}}/gstr1">
        Pending
        </a></td>
      <td> <a href="/gstapp/public/gstrs/{{$client->id}}/gstr2">
          Pending
        </a></td>
      <td> <a href="/gstapp/public/gstrs/{{$client->id}}/gstr3">
         Pending
        </a></td>
      <td>Pending</td>
      <td> <a class="btn btn-success btn-sm" href="/gstapp/public/gstrs/inactive/{{$client->id}}/{{$refs}}" role="button">Set inactive</a> </td>
@endforeach
@endif
</tbody>
</table>
</div>

@endsection