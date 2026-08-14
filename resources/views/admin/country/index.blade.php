@extends('layouts.admin')

@section('content')
<div class="row">
@if(session('message'))
<div class="alert alert-success">{{session('message')}}</div>
 @endif
    
        <div class="col-md-12">
              <div class="card">
                <div class="card-header">
                    <h3>Countries
                        <a href="{{ url('/countries/create')}}"class="btn btn-primary text-white btn-sm float-end">
                           Add New Country

                        </a>
                    </h3>
                    <div class = "card-body">
                        <table class="table-bordered table table-stripped">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Country name</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                            @forelse ($countries as $country)
                                <tr>
                                    <td>{{ $country->id }}</td>
                                    <td>{{ $country->country}}</td>
                                    <td>
                                    <a href="{{url('country/'.$country->id.'/delete')}}" class="btn btn-sm btn-primary">
                                    Edit
                                       </a>
                                    <a href="{{url('country/'.$country->id.'/delete')}}" onclick ="return confirm('Are you sure, you want to delete?')" class="btn btn-sm btn-danger">
                                    Delete
                                       </a>
                                    </td>
                                    

                                </tr>
                                @empty
                                <tr>
                                    <td colspan="7">No Country Available</td>
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