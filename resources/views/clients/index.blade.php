
@extends('layouts.app')

@section('content')
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
                     <h3 class="h4">Clients</h3>
                   </div>
         <br />
  
                   <div class="card-body">
                     <div class="table-bordered">  
           
                       <table class="table table-hover">
              <thead>
                <tr>
                  <th>#</th>
                  <th>Name</th>
                  <th>Business</th>
                  <th>Gstin</th>
                  <th>Phone</th>
                  <th>Email</th>
                  
                </tr>
    @if(count($clients) > 0)
    <?php $i = '1'; ?>
        @foreach($clients as $client)
            
              </thead>
              <tbody>
                <tr>

                  <td>{{$i}}</td>
                  <td><a href="/gstapp/public/clients/{{$client->id}}">{{$client->name}}</a></td>
                  <td>{{$client->bname}}</td>
                  <td>{{$client->gstin}}</td>
                  <td>{{$client->number}}</td>
                  <td>{{$client->email}}</td>
                  
                </tr>
                </tbody>
                <?php $i++; ?>
        @endforeach
    @else
        <p>No clients found</p>
    @endif
    </table>
  </div>
</div>
</section>
@endsection

