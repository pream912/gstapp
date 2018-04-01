@extends('layouts.app')

@section('content')

<?php $c_email = $clients->email ?>
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
                          <div class="card">
                              <div class="card-body">
                        <div class="row">
                       
                          <!-- Form Elements -->
                          <div class="col-lg-4">
                            
                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal"> Send Email</button>
                              
                          </div>
                          <div class="col-lg-4">
                              
                          <a href="/gstapp/public/clients/{{$clients->id}}/edit" class="btn btn-outline-info" role="button">Edit</a>
                               
                          </div>
                          <div class="col-lg-4">
                              
                                    <a href="#" class="btn btn-outline-danger" role="button">Delete</a>
                                </div>
                              </div>
                          </div>
                        </div>
                      </div>

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
                                        {{Form::label('name', 'Name:')}}
                                      <div class="input-group">
                                        <div class="input-group-prepend"></div>
                                        {{Form::text('name', '', ['class' => 'form-control', 'placeholder' => $clients->name])}}
                                      </div>
                                    </div>
                                  </div>
                                  
                                  <div class="col-sm-12 col-md-12">
                                    <div class="form-group">
                                        {{Form::label('bname', 'BusinessName:')}}
                                      <div class="input-group">
                                        <div class="input-group-prepend"></div>
                                        {{Form::text('bname', '', ['class' => 'form-control', 'placeholder' => $clients->bname])}}
                                      </div>
                                    </div>
                                  </div>
                                  
                                <div class="col-sm-12 col-md-12">
                                    <div class="form-group">
                                        {{Form::label('gstin', 'GSTIN no.:')}}
                                      <div class="input-group">
                                        <div class="input-group-prepend"></div>
                                        {{Form::text('gstin', '', ['class' => 'form-control', 'placeholder' => $clients->gstin])}}
                                      </div>
                                    </div>
                                  </div>
                                  
                                      <div class="col-sm-12 col-md-12">
                                    <div class="form-group">
                                        {{Form::label('pan', 'PAN no.:')}}
                                      <div class="input-group">
                                        <div class="input-group-prepend"></div>
                                        {{Form::text('pan', '', ['class' => 'form-control', 'placeholder' => $clients->pan])}}
                                      </div>
                                    </div>
                                  </div>
                                  
                                      <div class="col-sm-12 col-md-12">
                                    <div class="form-group">
                                        {{Form::label('number', 'Contact no.:')}}
                                      <div class="input-group">
                                        <div class="input-group-prepend"></div>
                                        {{Form::text('number', '', ['class' => 'form-control', 'placeholder' => $clients->number])}}
                                      </div>
                                    </div>
                                  </div>
                                  
                                  <div class="col-sm-12 col-md-12">
                                    <div class="form-group">
                                        {{Form::label('email', 'Email:')}}
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

                  <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                      <div class="modal-content">
                          {!! Form::open(['action' => 'ClientsController@sendmail', 'method' => 'POST']) !!}
                        <div class="modal-header">
                          <h5 class="modal-title" id="exampleModalLabel">New message</h5>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                        </div>
                        <div class="modal-body">
                            
                            <div class="form-group">
                              <label for="subject" class="col-form-label">Subject:</label>
                              <input type="text" class="form-control" id="subject">
                            </div>
                            <div class="form-group">
                              <label for="message_text" class="col-form-label">Message:</label>
                              <textarea class="form-control" id="message_text"></textarea>
                            </div>    
                        </div>
                        <div class="modal-footer">
                            {{Form::hidden('c_email', $c_email)}}
                          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                          <button class="btn btn-primary" type="submit" data-loading-text="Please wait...">send message</button>
                        </div>
                        {!! Form::close() !!}
                      </div>
                    </div>
                  </div>


@endsection