@extends('layouts.app')

@section('content')
<?php $yrp = $yr - 1; ?>
<section class="tables">
    
     <div class="col-md-12">
                  <div class="card">
         
                    <!--<div class="card-close">
                      <div class="dropdown">
                        <button type="button" id="closeCard2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="dropdown-toggle"><i class="fa fa-ellipsis-v"></i></button>
                        <div aria-labelledby="closeCard2" class="dropdown-menu dropdown-menu-right has-shadow"><a href="#" class="dropdown-item remove"> <i class="fa fa-times"></i>Close</a><a href="#" class="dropdown-item edit"> <i class="fa fa-gear"></i>Edit</a></div>
                      </div>
                    </div>-->
<div class="card-header d-flex align-items-center">
                      <h3 class="h4">Month Report</h3>
                    </div>
          <br />
          <div class="container-fluid">
          <div class="row">
          
             <select class="form-control col-md-3">
          <option>--Select Year--</option>
          <option>2000</option>
          <option>2010</option>
          <option>2012</option>
          <option>2015</option>
          <option>2017</option>
          <option>2018</option>
          </select>
        
           <select class="form-control col-md-3" style="margin-left:15px;">
          <option>--Select Month--</option>
          <option>Jan</option>
          <option>Feb</option>
          <option>Mar</option>
          <option>Apr</option>
          <option>May</option>
          <option>Jun</option>
          <option>Jul</option>
          <option>Aug</option>
          <option>Sep</option>
          <option>Oct</option>
          <option>Nov</option>
          <option>Dec</option>
          </select>
          <div class="autocomplete" style="">
    <input id="myInput" type="text" class="form-control" style="margin-left:4px;height:38px;" name="myCountry" placeholder="Country">
  </div>
           <button type="submit" class="btn btn-primary btn-sm" style="margin-left:10px;height:38px;">Search</button>
          </div>
          
          </div>
                    <div class="card-body">
                      <div class="table-bordered">  
            
                        <table class="table table-hover">
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
@endif

@if(count($clients) > 0)
    
      @foreach($clients as $client)
      @if($client->created_at->year <= $yr && $client->created_at->month <= $mn || $client->created_at->year <= $yr - 1)
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
            @endif
      @endforeach
    
@endif
</tbody>
</table>
</div>
</div>
</section>

@endsection