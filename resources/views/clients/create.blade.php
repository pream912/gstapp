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
                      <li class="breadcrumb-item active">Add Clients  </li>
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
                                {!! Form::open(['action' => 'ClientsController@store', 'method' => 'POST']) !!}
                              
                                <div class="form-group row">
                                 
                                  <div class="col-sm-12 col-md-12">
                                    <div class="form-group">
                                        {{Form::label('name', 'Name:')}}
                                      <div class="input-group">
                                        <div class="input-group-prepend"></div>
                                        
                                        {{Form::text('name', '', ['class' => 'form-control', 'placeholder' => 'Client name'])}}
                                      </div>
                                    </div>
                                  </div>
                                  
                                  <div class="col-sm-12 col-md-12">
                                    <div class="form-group">
                                        {{Form::label('bname', 'Business Name:')}}
                                      <div class="input-group">
                                        <div class="input-group-prepend"></div>
                                        {{Form::text('bname', '', ['class' => 'form-control', 'placeholder' => 'eg. Apple inc'])}}
                                      </div>
                                    </div>
                                  </div>
                                  
                                <div class="col-sm-12 col-md-12">
                                    <div class="form-group">
                                        {{Form::label('gstin', 'GSTIN:')}}
                                      <div class="input-group">
                                        <div class="input-group-prepend"></div>
                                        {{Form::text('gstin', '', ['class' => 'form-control', 'placeholder' => 'GSTIN'])}}
                                      </div>
                                    </div>
                                  </div>
                                  
                                      <div class="col-sm-12 col-md-12">
                                    <div class="form-group">
                                        {{Form::label('type', 'Business Type:')}}
                                      <div class="input-group">
                                        <div class="input-group-prepend"></div>
                                        {{Form::select('type', ['---Select business type---','PR' => 'Proprietorship', 'P' => 'Partnership', 'LLP' => 'LLP', 'LLC' => 'LLC', 'PL' => 'Private. Ltd.'])}}
                                      </div>
                                    </div>
                                  </div>
                                  
                                      <div class="col-sm-12 col-md-12">
                                    <div class="form-group">
                                        {{Form::label('pan', 'PAN no.:')}}
                                      <div class="input-group">
                                        <div class="input-group-prepend"></div>
                                        {{Form::text('pan', '', ['class' => 'form-control', 'placeholder' => 'PAN no.'])}}
                                      </div>
                                    </div>
                                  </div>
                                  
                                      <div class="col-sm-12 col-md-12">
                                    <div class="form-group">
                                        {{Form::label('number', 'Contact no.:')}}
                                      <div class="input-group">
                                        <div class="input-group-prepend"></div>
                                        {{Form::text('number', '', ['class' => 'form-control', 'placeholder' => 'eg, 9999999999'])}}
                                      </div>
                                    </div>
                                  </div>
                                  
                                  <div class="col-sm-12 col-md-12">
                                    <div class="form-group">
                                        {{Form::label('email', 'Email:')}}
                                      <div class="input-group">
                                        <div class="input-group-prepend"></div>
                                        {{Form::text('email', '', ['class' => 'form-control', 'placeholder' => 'eg, pream@gmail.com'])}}
                                      </div>
                                    </div>
                                  </div>
                                  <div class="col-sm-12 col-md-12">
                                    <div class="form-group">
                                        {{Form::label('enroll', 'Time of Enrollment:')}}
                                      <div class="input-group">
                                        <div class="input-group-prepend"></div>
                                        {{Form::date('enroll', \Carbon\Carbon::now())}}                                          
                                    </div>
                                    </div>
                                  </div>
                                  
                                </div>
                                <div class="form-group row">
                                  <div class="col-sm-4 offset-sm-3">
                                        {{form::submit('Submit', ['class'=>'btn-primary'])}}
                                        {{form::reset('Reset', ['class'=>'btn-primary'])}}
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