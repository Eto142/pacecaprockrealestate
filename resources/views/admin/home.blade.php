
@extends('layouts.admin')

@section('content')
<div class="row">
@if(session('message'))
<div class="alert alert-success">{{session('message')}}</div>
 @endif
    
        <div class="col-md-12">
              <div class="card">
                <div class="card-header">
                    <h3>
                        Users
                    </h3>
                    <div class = "card-body">
                        <table class="table-bordered table table-stripped">
                            <thead>
                                <tr>
                                <th>
                            Full Name
                          </th>
                          <th>
                            Email
                          </th>
                          <th>
                            Action
                          </th>
                                </tr>
                            </thead>
                            <tbody>
                            @forelse ($result  as $users)
                                <tr>
                                <td>{{$users->name}}</td>
                                <td>{{$users->email}}</td>
                                    <td>
                                    <a type="submit" class="btn btn-primary" href="{{url('profile/'.$users->id)}}">View</a>
                    <a type="submit" class="btn btn-success" href="{{url('send-mail/'.$users->id)}}">Send Mail</a>
                    <a type="submit" class="btn btn-danger" href="{{url('delete/'.$users->id)}}" onclick ="return confirm('Are you sure, you want to delete?')">Delete User</a>
                                    </td>
                                    

                                </tr>
                                @empty
                                <tr>
                                    <td colspan="7">No User Available</td>
                                </tr>
                                @endforelse
                           </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
</div>
@endsection
  
    