@extends('layouts.admin')

@section('content')
<div class="row">
@if(session('message'))
<div class="alert alert-success">{{session('message')}}</div>
 @endif
    
        <div class="col-md-12">
              <div class="card">
                <div class="card-header">
                    <h3>Houses
                        <a href="{{ url('house/create')}}"class="btn btn-primary text-white btn-sm float-end">
                           Add New Houses

                        </a>
                    </h3>
                    <div class = "card-body">
                        <table class="table-bordered table table-stripped">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Country</th>
                                    <th>Price</th>
                                    <th>Description</th>
                                    <th>Trending</th>
                                    <th>Status</th>
                                </tr>
                            </thead>
                            <tbody>
                            @forelse ($houses as $house)
                                <tr>
                                    <td>{{ $house->id }}</td>
                                    <td>
                                        @if($house->country)
                                        {{$house->country->country }}
                                        @else
                                        No Country
                                        @endif
                                    </td>
                                    <td>${{$house->selling_price }}</td>
                                    <td>{{$house->description}}</td>
                                     <td>{{$house->status}}</td>
                                    
                                    <td>
                                        <a href="{{url('/house/'.$house->id.'/edit')}}" class="btn btn-sm btn-success">VIEW</a>
                                    <a href="{{url('/house/'.$house->id.'/delete')}}" onclick ="return confirm('Are you sure, you want to delete?')" class="btn btn-sm btn-danger">
                                    Delete
                                       </a>
                                    </td>
                                    

                                </tr>
                                @empty
                                <tr>
                                    <td colspan="7">No Products Available</td>
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