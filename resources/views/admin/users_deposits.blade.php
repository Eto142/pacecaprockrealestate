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
                        <h4 class="card-title">Clients Deposit</h4>
                 
                </center>
               
                  <div class="template-demo">
                    
                    <b>Total Active Deposits</b>
                    <h1>${{$activeDeposit}}</h1>
                  </div>
               <br>
               <br>
               <hr>
                  <div class="template-demo">
                    
                    <b>Total Inactive Deposits</b>
                    <h1>${{$inactiveDeposit}}</h1>
                  </div>
                  <br>

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
                          <th>Client</th>
                          <th>Amount</th>
                          <th>Method</th>
                          <th>Status</th>
                          <th>Date</th>
                        </tr>
                      </thead>
                      <tbody>
                      @foreach($deposit as $deposithistory)
                                            <tr>   
                                            @foreach($user as $users)
                                                   @if($users->id == $deposithistory->user_id)
                                                    <td> {{$users->name}}</td>
                                                    @endif
                                            @endforeach
                                                  
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
                                                            <input type="hidden" name="status" value ="1">
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

          
        </div>

        @endsection