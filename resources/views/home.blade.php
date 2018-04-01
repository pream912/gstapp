@extends('layouts.app')

@section('content')
<?php ini_set('max_execution_time', 300); ?>
          <header class="page-header">
            <div class="container-fluid">
              <h2 class="no-margin-bottom">Dashboard</h2>
            </div>
          </header>
            <?php $newusr = '0'; ?>
            <?php $inactive = '0'; ?>           
            <?php $complete = '0'; ?>
            <?php $t = array("0","0"); ?>
            <?php $a = array("0","0"); ?>
            <?php $c = array("0","0"); ?>
            <?php $tu = '0'; ?>  
            <?php $pending = '0'; ?>

            <?php $j = '1'; ?>
            @while($j <=3)
            <?php $a[$j] = '0'; ?>
                @foreach($gstrs as $gstr)
                    @if($gstr->ref == '2018' . "" . $j && $gstr->active == '0')                                          
                        <?php $inactive++; ?>
                        <?php $a[$j]++; ?>
                    @endif
                @endforeach
            <?php $j++; ?>
            @endwhile

            <?php $j = '4'; ?>
            @while($j <=12)
            <?php $a[$j] = '0'; ?>
                @foreach($gstrs as $gstr)
                    @if($gstr->ref == '2017' . "" . $j && $gstr->active == '0')                                          
                        <?php $inactive++; ?>
                        <?php $a[$j]++; ?>
                    @endif
                @endforeach
            <?php $j++; ?>
            @endwhile

           

            @foreach($clients as $client)
            <?php $time = \Carbon\Carbon::parse($client->enroll) ?>
                @if($time->year == '2018')
                    <?php $newusr++; ?>
                @endif
            @endforeach


            <?php $i = '1'; ?>
            @while($i <=3)
            <?php $c[$i] = '0'; ?>
                @foreach($gstrs as $gstr)
                    @if($gstr->ref == '2018' . "" . $i)
                        @if($gstr->gstr1 && $gstr->gstr2 && $gstr->gstr3 != '0')
                        <?php $complete++; ?>
                        <?php $c[$i]++; ?>
                        @endif
                    @endif
                @endforeach
                <?php $i++; ?>
            @endwhile

            <?php $i = '4'; ?>
            @while($i <=12)
            <?php $c[$i] = '0'; ?>
                @foreach($gstrs as $gstr)
                    @if($gstr->ref == '2017' . "" . $i)
                        @if($gstr->gstr1 && $gstr->gstr2 && $gstr->gstr3 != '0')
                        <?php $complete++; ?>
                        <?php $c[$i]++; ?>
                        @endif
                    @endif
                @endforeach
                <?php $i++; ?>
            @endwhile


            <?php $i = '1'; ?>
            @while($i <=3)
            <?php $t[$i] = '0'; ?>
                @foreach($clients as $client)
                <?php $time = \Carbon\Carbon::parse($client->enroll) ?>
                    @if($time->year <= '2018' && $time->month <= $i || $time->year <= '2017')
                        <?php $tu++; ?>
                        <?php $t[$i]++; ?>                  
                    @endif
                @endforeach
                <?php $i++; ?>
            @endwhile

            <?php $i = '4'; ?>
            @while($i <=12)
            <?php $t[$i] = '0'; ?>
                @foreach($clients as $client)
                <?php $time = \Carbon\Carbon::parse($client->enroll) ?>
                    @if($time->year <= '2017' && $time->month <= $i || $time->year <= '2016')
                        <?php $tu++; ?>
                        <?php $t[$i]++; ?>                  
                    @endif
                @endforeach
                <?php $i++; ?>
            @endwhile
            

            

          <!-- Dashboard Counts Section-->
          <section class="dashboard-counts no-padding-bottom">
            <div class="container-fluid">
              <div class="row bg-white has-shadow">
                
                <!-- Item -->
                <div class="col-xl-3 col-sm-6">
                  <div class="item d-flex align-items-center">
                    <div class="icon bg-green"><i class="fa fa-users"></i></div>
                    <div class="title"><span>No of<br>Clients</span>
                      <div class="progress">
                        <div role="progressbar" style="width: 40%; height: 4px;" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" class="progress-bar bg-green"></div>
                      </div>
                    </div>
                    <div class="number"><strong>{{count($clients)}}</strong></div>
                  </div>
                </div>
                <!-- Item -->
                <div class="col-xl-3 col-sm-6">
                  <div class="item d-flex align-items-center">
                    <div class="icon bg-violet"><i class="icon-padnote"></i></div>
                    <div class="title"><span>Completed<br>Files</span>
                      <div class="progress">
                        <div role="progressbar" style="width: 25%; height: 4px;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100" class="progress-bar bg-violet"></div>
                      </div>
                    </div>
                    <div class="number"><strong>{{$complete}}</strong></div>
                  </div>
                </div>
                <!-- Item -->
                <div class="col-xl-3 col-sm-6">
                  <div class="item d-flex align-items-center">
                    <div class="icon bg-red"><i class="icon-padnote"></i></div>
                    <div class="title"><span>Pending<br>Files</span>
                      <div class="progress">
                        <div role="progressbar" style="width: 70%; height: 4px;" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" class="progress-bar bg-red"></div>
                      </div>
                    </div>
                    <div class="number"><strong>{{$tu}}</strong></div>
                  </div>
                </div>
                 <!-- Item -->
                <div class="col-xl-3 col-sm-6">
                  <div class="item d-flex align-items-center">
                    <div class="icon bg-orange"><i class="icon-padnote"></i></div>
                    <div class="title"><span>Set to<br>Inactive</span>
                      <div class="progress">
                        <div role="progressbar" style="width: 70%; height: 4px;" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" class="progress-bar bg-orange"></div>
                      </div>
                    </div>
                    <div class="number"><strong>{{$inactive}}</strong></div>
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
                              <th>Apr 2017</th>
                              <th>May 2017</th>
                              <th>Jun 2017</th>
                              <th>Jul 2017</th>
                              <th>Aug 2017</th>
                              <th>Sep 2017</th>
                              <th>Oct 2017</th>
                              <th>Nov 2017</th>
                              <th>Dec 2017</th>
                              <th>Jan 2018</th>
                              <th>Feb 2018</th>
                              <th>Mar 2018</th>
                            </tr>
                          </thead>
                          <tbody>
                            <tr>
                                <th scope="">Total Business</th>
                                <td>{{$t[4] - $a[4]}}</td>
                                <td>{{$t[5] - $a[5]}}</td>
                                <td>{{$t[6] - $a[6]}}</td>
                                <td>{{$t[7] - $a[7]}}</td>
                                <td>{{$t[8] - $a[8]}}</td>
                                <td>{{$t[9] - $a[9]}}</td>
                                <td>{{$t[10] - $a[10]}}</td>
                                <td>{{$t[11] - $a[11]}}</td>
                                <td>{{$t[12] - $a[12]}}</td>
                                <td>{{$t[1] - $a[1]}}</td>
                                <td>{{$t[2] - $a[2]}}</td>
                                <td>{{$t[3] - $a[3]}}</td>
                            </tr>
                            <tr>
                                <th scope="">Inactive</th>
                                <td>{{$a[4]}}</td>
                                <td>{{$a[5]}}</td>
                                <td>{{$a[6]}}</td>
                                <td>{{$a[7]}}</td>
                                <td>{{$a[8]}}</td>
                                <td>{{$a[9]}}</td>
                                <td>{{$a[10]}}</td>
                                <td>{{$a[11]}}</td>
                                <td>{{$a[12]}}</td>
                                <td>{{$a[1]}}</td>
                                <td>{{$a[2]}}</td>
                                <td>{{$a[3]}}</td>
                            </tr>
                          <tr>
                                <th scope="">Complete</th>
                                <td>{{$c[4]}}</td>
                                <td>{{$c[5]}}</td>
                                <td>{{$c[6]}}</td>
                                <td>{{$c[7]}}</td>
                                <td>{{$c[8]}}</td>
                                <td>{{$c[9]}}</td>
                                <td>{{$c[10]}}</td>
                                <td>{{$c[11]}}</td>
                                <td>{{$c[12]}}</td>
                                <td>{{$c[1]}}</td>
                                <td>{{$c[2]}}</td>
                                <td>{{$c[3]}}</td>
                            </tr>
                             <tr>
                              <th scope="">Pending</th>
                              <td><?php $p4 = ($t[4] - $a[4]) - $c[4]; ?> {{$p4}}</td>
                              <td><?php $p5 = ($t[5] - $a[5]) - $c[5]; ?> {{$p5}}</td>
                              <td><?php $p6 = ($t[6] - $a[6]) - $c[6]; ?> {{$p6}}</td>
                              <td><?php $p7 = ($t[7] - $a[7]) - $c[7]; ?> {{$p7}}</td>
                              <td><?php $p8 = ($t[8] - $a[8]) - $c[8]; ?> {{$p8}}</td>
                              <td><?php $p9 = ($t[9] - $a[9]) - $c[9]; ?> {{$p9}}</td>
                              <td><?php $p10 = ($t[10] - $a[10]) - $c[10]; ?> {{$p10}}</td>
                              <td><?php $p11 = ($t[11] - $a[11]) - $c[11]; ?> {{$p11}}</td>
                              <td><?php $p12 = ($t[12] - $a[12]) - $c[12]; ?> {{$p12}}</td>
                              <td><?php $p1 = ($t[1] - $a[1]) - $c[1]; ?> {{$p1}}</td>
                              <td><?php $p2 = ($t[2] - $a[2]) - $c[2]; ?> {{$p2}}</td>
                              <td><?php $p3 = ($t[3] - $a[3]) - $c[3]; ?> {{$p3}}</td>
                            </tr>
                            
                          </tbody>
                        </table>
                      </div>
                    </div>
                  </div>
                </div>
            </section>
@endsection