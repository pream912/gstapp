@extends('layouts.app')

@section('content')


              <!-- Page Header-->
              <header class="page-header">
                    <div class="container-fluid">
                      <h2 class="no-margin-bottom">Add Clients</h2>
                    </div>
                  </header>
                  <!-- Breadcrumb-->
                  <div class="breadcrumb-holder container-fluid">
                    <ul class="breadcrumb">
                      <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                      <li class="breadcrumb-item active"> {{$clients->bname}}  </li>
                    </ul>
                  </div>
                  <!-- Forms Section-->
                  <section class="forms"> 
                    <div class="container-fluid">
                      <div class="row">
                     
                        <!-- Form Elements -->
                        <div class="col-lg-12">
                          <div class="card">
                       
                            <div class="card-body">
                                {!! Form::open() !!}
                              
                                <div class="form-group row">
                                 
                                  <div class="col-sm-12 col-md-12">
                                    <div class="form-group">
                                      <div class="input-group">
                                        <div class="input-group-prepend"></div>
                                        {{Form::text('name', '', ['class' => 'form-control', 'placeholder' => $clients->name])}}
                                      </div>
                                    </div>
                                  </div>
                                  
                                  <div class="col-sm-12 col-md-12">
                                    <div class="form-group">
                                      <div class="input-group">
                                        <div class="input-group-prepend"></div>
                                        {{Form::text('bname', '', ['class' => 'form-control', 'placeholder' => $clients->bname])}}
                                      </div>
                                    </div>
                                  </div>
                                  
                                <div class="col-sm-12 col-md-12">
                                    <div class="form-group">
                                      <div class="input-group">
                                        <div class="input-group-prepend"></div>
                                        {{Form::text('gstin', '', ['class' => 'form-control', 'placeholder' => $clients->gstin])}}
                                      </div>
                                    </div>
                                  </div>
                                  
                                      <div class="col-sm-12 col-md-12">
                                    <div class="form-group">
                                      <div class="input-group">
                                        <div class="input-group-prepend"></div>
                                        {{Form::select('type', ['---Select business type---','PR' => 'Proprietorship', 'P' => 'Partnership', 'LLP' => 'LLP', 'LLC' => 'LLC', 'PL' => 'Private. Ltd.'])}}
                                      </div>
                                    </div>
                                  </div>
                                  
                                      <div class="col-sm-12 col-md-12">
                                    <div class="form-group">
                                      <div class="input-group">
                                        <div class="input-group-prepend"></div>
                                        {{Form::text('pan', '', ['class' => 'form-control', 'placeholder' => $clients->pan])}}
                                      </div>
                                    </div>
                                  </div>
                                  
                                      <div class="col-sm-12 col-md-12">
                                    <div class="form-group">
                                      <div class="input-group">
                                        <div class="input-group-prepend"></div>
                                        {{Form::text('number', '', ['class' => 'form-control', 'placeholder' => $clients->number])}}
                                      </div>
                                    </div>
                                  </div>
                                  
                                  <div class="col-sm-12 col-md-12">
                                    <div class="form-group">
                                      <div class="input-group">
                                        <div class="input-group-prepend"></div>
                                        {{Form::text('email', '', ['class' => 'form-control', 'placeholder' => $clients->email])}}
                                      </div>
                                    </div>
                                  </div>
                                  
                                </div>
                                {!! Form::close() !!}
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </section>
@endsection