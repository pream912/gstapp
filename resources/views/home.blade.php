@extends('layouts.app')

@section('content')

          <header class="page-header">
            <div class="container-fluid">
              <h2 class="no-margin-bottom">Dashboard</h2>
            </div>
          </header>
            <?php $newusr = '0'; ?>
            <?php $inactive = '0'; ?>           
            <?php $complete = '0'; ?>

            <?php $tu1 = '0'; ?>
            <?php $tu2 = '0'; ?>
            <?php $tu3 = '0'; ?>
            <?php $tu4 = '0'; ?>
            <?php $tu5 = '0'; ?>
            <?php $tu6 = '0'; ?>
            <?php $tu7 = '0'; ?>
            <?php $tu8 = '0'; ?>
            <?php $tu9 = '0'; ?>
            <?php $tu10 = '0'; ?>
            <?php $tu11 = '0'; ?>
            <?php $tu12 = '0'; ?>
            
            <?php $ia1 = '0'; ?>
            <?php $ia2 = '0'; ?>
            <?php $ia3 = '0'; ?>
            <?php $ia4 = '0'; ?>
            <?php $ia5 = '0'; ?>
            <?php $ia6 = '0'; ?>
            <?php $ia7 = '0'; ?>
            <?php $ia8 = '0'; ?>
            <?php $ia9 = '0'; ?>
            <?php $ia10 = '0'; ?>
            <?php $ia11 = '0'; ?>
            <?php $ia12 = '0'; ?>

            <?php $ic1 = '0'; ?>
            <?php $ic2 = '0'; ?>
            <?php $ic3 = '0'; ?>
            <?php $ic4 = '0'; ?>
            <?php $ic5 = '0'; ?>
            <?php $ic6 = '0'; ?>
            <?php $ic7 = '0'; ?>
            <?php $ic8 = '0'; ?>
            <?php $ic9 = '0'; ?>
            <?php $ic10 = '0'; ?>
            <?php $ic11 = '0'; ?>
            <?php $ic12 = '0'; ?>

            <?php $p1 = '0'; ?>
            <?php $p2 = '0'; ?>
            <?php $p3 = '0'; ?>
            <?php $p4 = '0'; ?>
            <?php $p5 = '0'; ?>
            <?php $p6 = '0'; ?>
            <?php $p7 = '0'; ?>
            <?php $p8 = '0'; ?>
            <?php $p9 = '0'; ?>
            <?php $p10 = '0'; ?>
            <?php $p11 = '0'; ?>
            <?php $p12 = '0'; ?>

            @foreach($gstrs as $gstr)
                @if($gstr->ref >= '20171' && $gstr->ref <= '201712')
                    @if($gstr->active == '0')
                    <?php $inactive++; ?>
                    @endif
                @endif
            @endforeach

            @foreach($clients as $client)
                @if($client->created_at->year == '2018')
                    <?php $newusr++; ?>
                @endif
            @endforeach

            @foreach($gstrs as $gstr)
                @if($gstr->ref >= '20171' && $gstr->ref <= '201712')
                    @if($gstr->gstr1 && $gstr->gstr2 && $gstr->gstr3 != '0')
                    <?php $complete++; ?>
                    @endif
                @endif
            @endforeach

            <?php $pending = ((count($clients) * 12) - $complete) - $inactive; ?>

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
                    <div class="number"><strong>{{$pending}}</strong></div>
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
                              <td>
                                  @foreach($clients as $client)
                                        @if($client->created_at->year <= '2018' && $client->created_at->month == '1')
                                            <?php $tu1++; ?>
                                        @endif
                                        @if($client->created_at->year <= '2017' && $client->created_at->month <= '12')
                                            <?php $tu1++; ?>
                                        @endif
                                    @endforeach
                                    {{$tu1}}
                              </td>
                              <td>
                                  @foreach($clients as $client)
                                        @if($client->created_at->year <= '2018' && $client->created_at->month <= '2')
                                            <?php $tu2++; ?>
                                        @endif
                                    @endforeach
                                    {{$tu2}}
                              </td>
                              <td>
                                  @foreach($clients as $client)
                                        @if($client->created_at->year <= '2018' && $client->created_at->month <= '3')
                                            <?php $tu3++; ?>
                                        @endif
                                    @endforeach
                                    {{$tu3}}
                              </td>
                              <td>
                                  @foreach($clients as $client)
                                        @if($client->created_at->year <= '2018' && $client->created_at->month <= '4')
                                            <?php $tu4++; ?>
                                        @endif
                                    @endforeach
                                    {{$tu4}}
                              </td>
                              <td>
                                  @foreach($clients as $client)
                                        @if($client->created_at->year <= '2018' && $client->created_at->month <= '5')
                                            <?php $tu5++; ?>
                                        @endif
                                    @endforeach
                                    {{$tu5}}
                              </td>
                              <td>
                                  @foreach($clients as $client)
                                        @if($client->created_at->year <= '2018' && $client->created_at->month <= '6')
                                            <?php $tu6++; ?>
                                        @endif
                                    @endforeach
                                    {{$tu6}}
                              </td>
                              <td>
                                  @foreach($clients as $client)
                                        @if($client->created_at->year <= '2018' && $client->created_at->month <= '7')
                                            <?php $tu7++; ?>
                                        @endif
                                    @endforeach
                                    {{$tu7}}
                              </td>
                              <td>
                                  @foreach($clients as $client)
                                        @if($client->created_at->year <= '2018' && $client->created_at->month <= '8')
                                            <?php $tu8++; ?>
                                        @endif
                                    @endforeach
                                    {{$tu8}}
                              </td>
                              <td>
                                  @foreach($clients as $client)
                                        @if($client->created_at->year <= '2018' && $client->created_at->month <= '9')
                                            <?php $tu9++; ?>
                                        @endif
                                    @endforeach
                                    {{$tu9}}
                              </td>
                              <td>
                                  @foreach($clients as $client)
                                        @if($client->created_at->year <= '2018' && $client->created_at->month <= '10')
                                            <?php $tu10++; ?>
                                        @endif
                                    @endforeach
                                    {{$tu10}}
                              </td>
                              <td>
                                  @foreach($clients as $client)
                                        @if($client->created_at->year <= '2018' && $client->created_at->month <= '11')
                                            <?php $tu11++; ?>
                                        @endif
                                    @endforeach
                                    {{$tu11}}
                              </td>
                              <td>
                                  @foreach($clients as $client)
                                        @if($client->created_at->year <= '2018' && $client->created_at->month <= '12')
                                            <?php $tu12++; ?>
                                        @endif
                                    @endforeach
                                    {{$tu12}}
                              </td>
                            </tr>
                            <tr>
                              <th scope="">Inactive</th>
                              <td>
                                  @foreach($gstrs as $gstr)
                                        @if($gstr->ref == '20181' && $gstr->active == '0')                                          
                                            <?php $ia1++; ?>
                                        @endif
                                    @endforeach
                                    {{$ia1}}
                              </td>
                              <td>
                                  @foreach($gstrs as $gstr)
                                        @if($gstr->ref == '20182' && $gstr->active == '0')                                          
                                            <?php $ia2++; ?>
                                        @endif
                                    @endforeach
                                    {{$ia2}}
                              </td>
                              <td>
                                  @foreach($gstrs as $gstr)
                                        @if($gstr->ref == '20183' && $gstr->active == '0')                                          
                                            <?php $ia3++; ?>
                                        @endif
                                    @endforeach
                                    {{$ia3}}
                              </td>
                              <td>
                                  @foreach($gstrs as $gstr)
                                        @if($gstr->ref == '20184' && $gstr->active == '0')                                          
                                            <?php $ia1++; ?>
                                        @endif
                                    @endforeach
                                    {{$ia4}}
                              </td>
                              <td>
                                  @foreach($gstrs as $gstr)
                                        @if($gstr->ref == '20185' && $gstr->active == '0')                                          
                                            <?php $ia1++; ?>
                                        @endif
                                    @endforeach
                                    {{$ia5}}
                              </td>
                              <td>
                                  @foreach($gstrs as $gstr)
                                        @if($gstr->ref == '20186' && $gstr->active == '0')                                          
                                            <?php $ia1++; ?>
                                        @endif
                                    @endforeach
                                    {{$ia6}}
                              </td>
                              <td>
                                  @foreach($gstrs as $gstr)
                                        @if($gstr->ref == '20187' && $gstr->active == '0')                                          
                                            <?php $ia7++; ?>
                                        @endif
                                    @endforeach
                                    {{$ia7}}
                              </td>
                              <td>
                                  @foreach($gstrs as $gstr)
                                        @if($gstr->ref == '20188' && $gstr->active == '0')                                          
                                            <?php $ia8++; ?>
                                        @endif
                                    @endforeach
                                    {{$ia8}}
                              </td>
                              <td>
                                  @foreach($gstrs as $gstr)
                                        @if($gstr->ref == '20189' && $gstr->active == '0')                                          
                                            <?php $ia9++; ?>
                                        @endif
                                    @endforeach
                                    {{$ia9}}
                              </td>
                              <td>
                                  @foreach($gstrs as $gstr)
                                        @if($gstr->ref == '201810' && $gstr->active == '0')                                          
                                            <?php $ia10++; ?>
                                        @endif
                                    @endforeach
                                    {{$ia10}}
                              </td>
                              <td>
                                  @foreach($gstrs as $gstr)
                                        @if($gstr->ref == '201811' && $gstr->active == '0')                                          
                                            <?php $ia11++; ?>
                                        @endif
                                    @endforeach
                                    {{$ia11}}
                              </td>
                              <td>
                                  @foreach($gstrs as $gstr)
                                        @if($gstr->ref == '20182' && $gstr->active == '0')                                          
                                            <?php $ia12++; ?>
                                        @endif
                                    @endforeach
                                    {{$ia12}}
                              </td>
                            </tr>
                          <tr>
                              <th scope="">Complete</th>
                              <td>
                                    @foreach($gstrs as $gstr)
                                        @if($gstr->ref == '20181')
                                            @if($gstr->gstr1 && $gstr->gstr2 && $gstr->gstr3 != '0')
                                                <?php $ic1++; ?>
                                            @endif
                                        @endif
                                    @endforeach
                                    {{$ic1}}
                              </td>
                              <td>
                                  @foreach($gstrs as $gstr)
                                        @if($gstr->ref == '20182')
                                            @if($gstr->gstr1 && $gstr->gstr2 && $gstr->gstr3 != '0')
                                                <?php $ic2++; ?>
                                            @endif
                                        @endif
                                    @endforeach
                                    {{$ic2}}
                              </td>
                              <td>
                                  @foreach($gstrs as $gstr)
                                        @if($gstr->ref == '20183')
                                            @if($gstr->gstr1 && $gstr->gstr2 && $gstr->gstr3 != '0')
                                                <?php $ic3++; ?>
                                            @endif
                                        @endif
                                    @endforeach
                                    {{$ic3}}
                              </td>
                              <td>
                                  @foreach($gstrs as $gstr)
                                        @if($gstr->ref == '20184')
                                            @if($gstr->gstr1 && $gstr->gstr2 && $gstr->gstr3 != '0')
                                                <?php $ic4++; ?>
                                            @endif
                                        @endif
                                    @endforeach
                                    {{$ic4}}
                              </td>
                              <td>
                                  @foreach($gstrs as $gstr)
                                        @if($gstr->ref == '20185')
                                            @if($gstr->gstr1 && $gstr->gstr2 && $gstr->gstr3 != '0')
                                                <?php $ic5++; ?>
                                            @endif
                                        @endif
                                    @endforeach
                                    {{$ic5}}
                              </td>
                              <td>
                                  @foreach($gstrs as $gstr)
                                        @if($gstr->ref == '20186')
                                            @if($gstr->gstr1 && $gstr->gstr2 && $gstr->gstr3 != '0')
                                                <?php $ic6++; ?>
                                            @endif
                                        @endif
                                    @endforeach
                                    {{$ic6}}
                              </td>
                              <td>
                                  @foreach($gstrs as $gstr)
                                        @if($gstr->ref == '20187')
                                            @if($gstr->gstr1 && $gstr->gstr2 && $gstr->gstr3 != '0')
                                                <?php $ic7++; ?>
                                            @endif
                                        @endif
                                    @endforeach
                                    {{$ic7}}
                              </td>
                              <td>
                                  @foreach($gstrs as $gstr)
                                        @if($gstr->ref == '20188')
                                            @if($gstr->gstr1 && $gstr->gstr2 && $gstr->gstr3 != '0')
                                                <?php $ic8++; ?>
                                            @endif
                                        @endif
                                    @endforeach
                                    {{$ic8}}
                              </td>
                              <td>
                                  @foreach($gstrs as $gstr)
                                        @if($gstr->ref == '20189')
                                            @if($gstr->gstr1 && $gstr->gstr2 && $gstr->gstr3 != '0')
                                                <?php $ic9++; ?>
                                            @endif
                                        @endif
                                    @endforeach
                                    {{$ic9}}
                              </td>
                              <td>
                                  @foreach($gstrs as $gstr)
                                        @if($gstr->ref == '201810')
                                            @if($gstr->gstr1 && $gstr->gstr2 && $gstr->gstr3 != '0')
                                                <?php $ic10++; ?>
                                            @endif
                                        @endif
                                    @endforeach
                                    {{$ic10}}
                              </td>
                              <td>
                                  @foreach($gstrs as $gstr)
                                        @if($gstr->ref == '201811')
                                            @if($gstr->gstr1 && $gstr->gstr2 && $gstr->gstr3 != '0')
                                                <?php $ic11++; ?>
                                            @endif
                                        @endif
                                    @endforeach
                                    {{$ic11}}
                              </td>
                              <td>
                                  @foreach($gstrs as $gstr)
                                        @if($gstr->ref == '201812')
                                            @if($gstr->gstr1 && $gstr->gstr2 && $gstr->gstr3 != '0')
                                                <?php $ic12++; ?>
                                            @endif
                                        @endif
                                    @endforeach
                                    {{$ic12}}
                              </td>
                            </tr>
                             <tr>
                              <th scope="">Pending</th>
                              <td><?php $p1 = ($tu1 - $ia1) - $ic1; ?> {{$p1}}</td>
                              <td><?php $p2 = ($tu2 - $ia2) - $ic2; ?> {{$p2}}</td>
                              <td><?php $p3 = ($tu3 - $ia3) - $ic3; ?> {{$p3}}</td>
                              <td><?php $p4 = ($tu4 - $ia4) - $ic4; ?> {{$p4}}</td>
                              <td><?php $p5 = ($tu5 - $ia5) - $ic5; ?> {{$p5}}</td>
                              <td><?php $p6 = ($tu6 - $ia6) - $ic6; ?> {{$p6}}</td>
                              <td><?php $p7 = ($tu7 - $ia7) - $ic7; ?> {{$p7}}</td>
                              <td><?php $p8 = ($tu8 - $ia8) - $ic8; ?> {{$p8}}</td>
                              <td><?php $p9 = ($tu9 - $ia9) - $ic9; ?> {{$p9}}</td>
                              <td><?php $p10 = ($tu10 - $ia10) - $ic10; ?> {{$p10}}</td>
                              <td><?php $p11 = ($tu11 - $ia11) - $ic11; ?> {{$p11}}</td>
                              <td><?php $p12 = ($tu12 - $ia12) - $ic12; ?> {{$p12}}</td>
                            </tr>
                            
                          </tbody>
                        </table>
                      </div>
                    </div>
                  </div>
                </div>
            </section>

@endsection