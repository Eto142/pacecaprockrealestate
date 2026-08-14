@extends('layouts.admin')

@section('content')
<div class="main-panel">
        <div class="content-wrapper">
        @if(session('message'))
<div class="alert alert-success mb-2">{{session('message')}}</div>
 @endif
            <div class="col-md-6 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                    <center>                  
                        <h4 class="card-title">{{$userProfile->name}}</h4>
                  <b>
                  {{$userProfile->email}}
                  </b>
                </center>

                  <div class="template-demo">
                    <h1>${{$totalProfit}}</h1>
                    <b>Total Balance</b>
                  </div>
                  <br>
                  <h6>Last Login</h6>
                  <a type="button" href="#" class="btn btn-outline-danger btn-icon-text">
                                                                           
                          {{Carbon\Carbon::parse($userProfile->last_seen)->diffForHumans()}}
                     </a>
                    </br>
                    <h6>Status</h6>
                    @if($userProfile->last_seen >= now()->subMinutes(2))
                    <a type="button" href="#" class="btn btn-primary btn-icon-text">
                      online
                    </a>
                    @else
                    <a type="button" href="#" class="btn btn-outline-primary btn-icon-text">
                   
                    offline
                   </a>
                    @endif
                
                
                    </br>

                    </br>

                </div>
              </div>
            </div>

<div class="col-lg-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Deposit History</h4>
                  <div class="table-responsive">
                    <table class="table table-hover">
                      <thead>
                        <tr>
                          <th>Amount</th>
                          <th>Method</th>
                          <th>Status</th>
                          <th>Date</th>
                        </tr>
                      </thead>
                      <tbody>
                      @foreach($userDeposit as $deposithistory)
                                            <tr>
                                                    
                                                  
                                                    <td>${{$deposithistory->amount}}</td>
                                                    <td>{{$deposithistory->payment_method}}</td>
                                                    @if($deposithistory->status=='0')
                                                    <td>pending</td>
                                                    @else <td>approved</td>
                                                    @endif
                                                    <td>{{$deposithistory->created_at}}</td>
                                                    
                                                    <td>
                                                        <form action="{{url('approve-deposit/'.$deposithistory->id)}}">
                                                            @csrf
                                                            <input type="hidden" name="email" value="{{$userProfiles->email}}">
                                                            <input type="hidden" name="status" value ="1">
                                                            <input type="hidden" name="amount" value ="{{$deposithistory->amount}}">
                                                            <button type="submit" class="btn btn-primary me-2" href="">Approve</button>
                                                        </form>
                                                        
                                                        <br>
                                                        <form action="{{url('decline-deposit/'.$deposithistory->id)}}">
                                                            @csrf
                                                            <input type="hidden" name="status" value ="0">
                                                            <button type="submit" class="btn btn-danger" href="">Decline</button>
                                                        </form>
                                                    </td>
                                                </tr>
                        @endforeach
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
          
   

            <div class="col-lg-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Withdrawal History</h4>
                  <div class="table-responsive">
                    <table class="table table-hover">
                    <thead>
                        <tr>
                          <th>Amount Requested</th>
                          <th>Payment Method</th>
                          <th>Status</th>
                          <th>Date</th>
                        </tr>
                      </thead>
                      <tbody>
                      @foreach($userWithdrawal  as $withdrawalhistory)
                                            <tr>   
                                                    <td>${{$withdrawalhistory->amount}}</td>
                                                    <td>{{$withdrawalhistory->payment_method}}</td>
                                                    @if($withdrawalhistory->status=='0')
                                                    <td>pending</td>
                                                    @else <td>approved</td>
                                                    @endif
                                                    <td>{{$withdrawalhistory->created_at}}</td>
                                                    
                                                    <td>
                                                        <form action="{{url('approve-withdrawal/'.$withdrawalhistory->id)}}">
                                                            @csrf
                                                            <input type="hidden" name="status" value ="1">
                                                            <button type="submit" class="btn btn-primary me-2" href="">Approve</button>
                                                        </form>
                                                        
                                                        <br>
                                                        <form action="{{url('decline-withdrawal/'.$withdrawalhistory->id)}}">
                                                            @csrf
                                                            <input type="hidden" name="status" value ="0">
                                                            <button type="submit" class="btn btn-danger" href="">Decline</button>
                                                        </form>
                                                    </td>
                                                </tr>
                        @endforeach
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-lg-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Investment History</h4>
                  <div class="table-responsive">
                    <table class="table table-hover">
                      <thead>
                        <tr>
                          <th>Amount</th>
                          <th>Plan Name</th>
                          <th>Plan Duration</th>
                          <th>Plan ROI</th>
                          <th>Plan Start</th>
                          <th>Plan endDate</th>
                        </tr>
                      </thead>
                      <tbody>
                      @foreach($userInvestment as $investmentHistory)
                                            <tr>
                                                    
                                            <td>${{$investmentHistory->amount}}</td>
                                            <td>{{$investmentHistory->plan_name}}</td>
                                            <td>{{$investmentHistory->plan_duration}}</td>
                                            <td>${{$investmentHistory->plan_percentage*$investmentHistory->amount}}({{$investmentHistory->plan_percentage}}%)</td>
                                            <td>{{$investmentHistory->plan_start}}</td>
                                            <td>{{$investmentHistory->plan_end}}</td>
                                            
                                            </tr>
                        @endforeach
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>

          
        </div>

        @endsection