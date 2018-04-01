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
                          <div class="card">
                              <div class="card-body">
                        <div class="row">
                       
                          <!-- Form Elements -->
                          <div class="col-lg-4">
                            
                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal"> Send Email</button>
                              
                          </div>
                          <div class="col-lg-4">
                              
                                    <a href="#" class="btn btn-warning" role="button">Edit</a>
                               
                          </div>
                          <div class="col-lg-4">
                              
                                    <a href="#" class="btn btn-danger" role="button">Delete</a>
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
                                    {!! Form::open(['action' => ['ClientsController@update', $clients->id], 'method' => 'POST']) !!}
                              
                                <div class="form-group row">
                                 
                                  <div class="col-sm-12 col-md-12">
                                    <div class="form-group">
                                        {{Form::label('name', 'Name:')}}
                                      <div class="input-group">
                                        <div class="input-group-prepend"></div>
                                        {{Form::text('name', $clients->name, ['class' => 'form-control', 'placeholder' => $clients->name])}}
                                      </div>
                                    </div>
                                  </div>
                                  
                                  <div class="col-sm-12 col-md-12">
                                    <div class="form-group">
                                        {{Form::label('bname', 'BusinessName:')}}
                                      <div class="input-group">
                                        <div class="input-group-prepend"></div>
                                        {{Form::text('bname', $clients->bname, ['class' => 'form-control', 'placeholder' => $clients->bname])}}
                                      </div>
                                    </div>
                                  </div>
                                  
                                <div class="col-sm-12 col-md-12">
                                    <div class="form-group">
                                        {{Form::label('gstin', 'GSTIN no.:')}}
                                      <div class="input-group">
                                        <div class="input-group-prepend"></div>
                                        {{Form::text('gstin', $clients->gstin, ['class' => 'form-control', 'placeholder' => $clients->gstin])}}
                                      </div>
                                    </div>
                                  </div>
                                  
                                      <div class="col-sm-12 col-md-12">
                                    <div class="form-group">
                                        {{Form::label('pan', 'PAN no.:')}}
                                      <div class="input-group">
                                        <div class="input-group-prepend"></div>
                                        {{Form::text('pan', $clients->pan, ['class' => 'form-control', 'placeholder' => $clients->pan])}}
                                      </div>
                                    </div>
                                  </div>
                                  
                                      <div class="col-sm-12 col-md-12">
                                    <div class="form-group">
                                        {{Form::label('number', 'Contact no.:')}}
                                      <div class="input-group">
                                        <div class="input-group-prepend"></div>
                                        {{Form::text('number', $clients->number, ['class' => 'form-control', 'placeholder' => $clients->number])}}
                                      </div>
                                    </div>
                                  </div>
                                  
                                  <div class="col-sm-12 col-md-12">
                                    <div class="form-group">
                                        {{Form::label('email', 'Email:')}}
                                      <div class="input-group">
                                        <div class="input-group-prepend"></div>
                                        {{Form::text('email', $clients->email, ['class' => 'form-control', 'placeholder' => $clients->email])}}
                                      </div>
                                    </div>
                                  </div>
                                  <div class="col-sm-12 col-md-12">
                                        <div class="form-group">
                                            {{Form::label('enroll', 'Enrollment Date:')}}
                                          <div class="input-group">
                                            <div class="input-group-prepend"></div>
                                            {{Form::date('enroll', \Carbon\Carbon::parse($clients->enroll))}}                                          
                                        </div>
                                        </div>
                                      </div>

                                  
                                </div>
                                {{form::hidden('_method','PUT')}}
                                {{form::submit('Submit', ['class'=>'btn-primary'])}}
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
                        <div class="modal-header">
                          <h5 class="modal-title" id="exampleModalLabel">New message</h5>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                        </div>
                        <div class="modal-body">
                          <form>
                            <div class="form-group">
                              <label for="subject" class="col-form-label">Subject:</label>
                              <input type="text" class="form-control" id="subject">
                            </div>
                            <div class="form-group">
                              <label for="message-text" class="col-form-label">Message:</label>
                              <textarea class="form-control" id="message-text"></textarea>
                            </div>
                          </form>
                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                          <button type="button" class="btn btn-primary">Send message</button>
                        </div>
                      </div>
                    </div>
                  </div>


@endsection