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
                        <h4 class="card-title">Clients withdrawal</h4>
                 
                </center>
               
                  <div class="template-demo">
                    
                    <b>Total Approved withdrawals</b>
                    <h1>${{$activeWithdrawal}}</h1>
                  </div>
               <br>
               <br>
               <hr>
                  <div class="template-demo">
                    
                    <b>Total Declined withdrawals</b>
                    <h1>${{$inactiveWithdrawal}}</h1>
                  </div>
                  <br>

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
                          <th>Client</th>
                          <th>Amount Requested</th>
                          <th>Receiving Mode</th>
                          <th>Status</th>
                          <th>Date</th>
                        </tr>
                      </thead>
                      <tbody>
                      @foreach($withdrawal as $withdrawalhistory)
                                            <tr>   
                                            @foreach($user as $users)
                                                   @if($users->id == $withdrawalhistory->user_id)
                                                    <td> {{$users->name}}</td>
                                                    @endif
                                            @endforeach
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

          
        </div>

        @endsection