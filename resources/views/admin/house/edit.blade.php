
@extends('layouts.admin')

@section('content')
<div class="row">
            <div class="col-md-12">
            @if(session('message'))
<div class="alert alert-success mb-2">{{session('message')}}</div>
 @endif
              <div class="card">
                <div class="card-header">
                    <h3>Edit House
                        <a href="{{ url('/houses')}}"class="btn btn-primary text-white btn-sm float-end">Back</a>
                    </h3>
                    <div class = "card-body">

                        @if ($errors->any())
                        <div class="alert alert-warning">
                            @foreach ($errors->all() as $error)
                            <div>{{$error}}</div>
                            @endforeach
                        </div>
                        @endif
                        <form action ="{{url('/house/'.$house->id)}}" method ="POST" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="row">
                            <div class="col-md-12 mb-3">
                            <label>Country</label>
                            <select name="country_id" class="form-select">
                            @foreach($country as $countries)
                                 <option value="{{$countries->id}}" {{$countries->id == $house->country_id ? 'selected':''}}>{{$countries->country}}</option>
                             @endforeach
                              </select>
                            </div>
                            <div class="col-md-12 mb-3">
                                <label>State</label>
                                <input type="text" name = "state" value="{{$house->state}}" class="form-control">
                               
                            </div>
                            <div class="col-md-12 mb-3">
                                <label>Slug</label>
                                <input type="text" name = "slug" value="{{$house->slug}}" class="form-control">
                               
                            </div>
                            <div class="col-md-12 mb-3">
                                <label>Address</label>
                                <textarea type="text" name = "address" class="form-control" row="3">{{$house->address}}</textarea>
                               
                            </div>

                            <div class="col-md-12 mb-3">
                                <label>Description</label>
                                <textarea type="text" name = "description" class="form-control" row="3">{{$house->description}}</textarea>
                               
                            </div>
                            <div class="col-md-12 mb-3">
                            <label>Image</label>
                                <input type="file" name = "image[]" multiple class="form-control">
                               <div>
                                @if($house->houseImages)
                                <div class="row">
                                @foreach($house->houseImages as $image)
                                    <div class="col-md-2">
                                    <img src="{{asset($image->image)}}" alt="" style = "width:100px; height:80px" class="me-4 border" alt ="Img"/>
                                <a href="{{url('/houses-image/'.$image->id.'/delete')}}" class="d-block">Remove</a>
                                    </div>
                                    @endforeach
                                </div>
                               
                                @else
                                <h5>No Images Uploaded</h5>
                                @endif
                               </div>
                            </div>
                            <div class="col-md-12 mb-3">
                            <label>Selling Price</label>
                                <input type="number" name ="selling_price" value="{{$house->selling_price}}" multiple class="form-control">
                              
                            </div>
                            <div class="col-md-12 mb-3">
                            <label>Original Price</label>
                                <input type="number" name ="original_price" value="{{$house->original_price}}" multiple class="form-control">
                               
                            </div>
                <div class="col-md-12 mb-3">
                <label> Status </label>
                <select class="form-control form-control-lg" name="status" id="exampleFormControlSelect1">          
                                 <option value="{{$house->status}}" 'selected'>{{$house->status}}</option>  
                                <option value="On Sale">On Sale</option>
                                <option value="Sold">Sold</option>
                                <option value="On Rent">On Rent</option>
                                <option value="Rented">Rented</option>                            
                              </select>
                    </div>
                            </div>
                            <div class="col-md-12 mb-3">
                            <label>Rating</label>
                                <input type="number" name ="rating" value="{{$house->rating}}" multiple class="form-control">
                               
                            </div>                            
                            
                

                            <div class="col-md-12 mb-3">
                            <label>Trending</label><br/>
                                <input type="checkbox" name ="trending" {{$house->trending == '1' ? 'checked':''}}>
                            </div>
                            <div class="col-md-12 mb-3">
                            <button type = "Update" class="btn btn-primary float-end">Save</button>
                            </div>
                            </div>

                    </div>

                </div>
                </div>
                </div>
</div>

@endsection