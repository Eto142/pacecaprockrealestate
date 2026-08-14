@extends('layouts.admin')

@section('content')
<div class="main-panel">
        <div class="content-wrapper">
        @if(session('message'))
<div class="alert alert-success mb-2">{{session('message')}}</div>
 @endif

            <div class="col-lg-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Profit History</h4>
                  <div class="table-responsive">
                    <table class="table table-hover">
                      <thead>
                        <tr>
                          <th>Client</th>
                          <th>Description</th>
                          <th>Capital</th>
                          <th>Return</th>
                          <th>Date</th>
                        </tr>
                      </thead>
                      <tbody>
                      @foreach($profit as $profithistory)
                                            <tr>   
                                            @foreach($user as $users)
                                                   @if($users->id == $profithistory->user_id)
                                                    <td> {{$users->name}}</td>
                                                    @endif
                                            @endforeach
                                                    <td>${{$profithistory->description}}</td>
                                                    <td>{{$profithistory->capital}}</td>
                                                    <td>{{$profithistory->return}}</td>
                                                    <td>{{$profithistory->created_at}}</td>
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