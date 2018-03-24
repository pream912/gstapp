@extends('layouts.app')

@section('content')

          <header class="page-header">
            <div class="container-fluid">
              <h2 class="no-margin-bottom">Dashboard</h2>
            </div>
          </header>
          <!-- Dashboard Counts Section-->
          <section class="dashboard-counts no-padding-bottom">
            <div class="container-fluid">
              <div class="row bg-white has-shadow">
                <!-- Item -->
                <div class="col-xl-4 col-sm-6">
                  <div class="item d-flex align-items-center">
                    <div class="icon bg-violet"><i class="icon-user"></i></div>
                    <div class="title"><span>New<br>Clients</span>
                      <div class="progress">
                        <div role="progressbar" style="width: 25%; height: 4px;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100" class="progress-bar bg-violet"></div>
                      </div>
                    </div>
                    <div class="number"><strong>25</strong></div>
                  </div>
                </div>
                <!-- Item -->
                <div class="col-xl-4 col-sm-6">
                  <div class="item d-flex align-items-center">
                    <div class="icon bg-red"><i class="icon-padnote"></i></div>
                    <div class="title"><span>Pending<br>Files</span>
                      <div class="progress">
                        <div role="progressbar" style="width: 70%; height: 4px;" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" class="progress-bar bg-red"></div>
                      </div>
                    </div>
                    <div class="number"><strong>70</strong></div>
                  </div>
                </div>
                <!-- Item -->
                <div class="col-xl-4 col-sm-6">
                  <div class="item d-flex align-items-center">
                    <div class="icon bg-green"><i class="fa fa-users"></i></div>
                    <div class="title"><span>No of<br>Clients</span>
                      <div class="progress">
                        <div role="progressbar" style="width: 40%; height: 4px;" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" class="progress-bar bg-green"></div>
                      </div>
                    </div>
                    <div class="number"><strong>40</strong></div>
                  </div>
                </div>
            
              </div>
            </div>
          </section>
        <!--- Dashboard Tables --->
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
                      <h3 class="h4">Overall Report</h3>
                    </div>
					<br />
					<div class="container-fluid">
					<div class="row">
					
						 <select class="form-control col-md-5">
					<option>--Select Year--</option>
					<option>2000</option>
					<option>2010</option>
					<option>2012</option>
					<option>2015</option>
					<option>2017</option>
					<option>2018</option>
				  </select>
				
				   <select class="form-control col-md-5" style="margin-left:15px;">
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
					 <button type="submit" class="btn btn-primary btn-sm" style="margin-left:10px;height:38px;">Search</button>
					</div>
					
					</div>
                    <div class="card-body">
                      <div class="table-bordered">  
					  
                        <table class="table table-hover">
						
                          <thead>
                            <tr>
                              <th>Month</th>
							  <th>Jan</th>
							  <th>Feb</th>
							  <th>Mar</th>
							  <th>Apr</th>
							  <th>May</th>
							  <th>Jun</th>
							  <th>Jul</th>
							  <th>Aug</th>
							  <th>Sep</th>
							  <th>Oct</th>
							  <th>Nov</th>
							  <th>Dec</th>
                            </tr>
                          </thead>
                          <tbody>
                            <tr>
                              <th scope="">Total Business</th>
                              <td>3</td>
                              <td>3</td>
                              <td>1</td>
                              <td>1</td>
                              <td>1</td>
                              <td>1</td>
                              <td>1</td>
                              <td>1</td>
                              <td>1</td>
                              <td>1</td>
                              <td>1</td>
                              <td>1</td>
                            </tr>
                          <tr>
                              <th scope="">Pending</th>
                              <td>3</td>
                              <td>3</td>
                              <td>3</td>
                              <td>3</td>
                              <td>3</td>
                              <td>3</td>
                              <td>3</td>
                              <td>3</td>
                              <td>3</td>
                              <td>3</td>
                              <td>3</td>
                              <td>1</td>
                            </tr>
							 <tr>
                              <th scope="">Complete</th>
                              <td>3</td>
                              <td>3</td>
                              <td>1</td>
                              <td>1</td>
                              <td>1</td>
                              <td>1</td>
                              <td>1</td>
                              <td>1</td>
                              <td>1</td>
                              <td>1</td>
                              <td>1</td>
                              <td>1</td>
                            </tr>
							
                          </tbody>
                        </table>
                      </div>
                    </div>
                  </div>
                </div>
			</section>

@endsection