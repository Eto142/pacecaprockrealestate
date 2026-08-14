
@extends('layouts.admin')

@section('content')
<div class="row">
@if(session('message'))
<div class="alert alert-success">{{session('message')}}</div>
 @endif
            <div class="col-md-12">
              <div class="card">
                <div class="card-header">
                    <h3>Add A House
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
                        <form action ="{{ url('add/house')}}" method ="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                            <div class="col-md-12 mb-3">
                            <label>Country</label>
                            <select name="country_id" class="form-select">
                               @foreach($countries as $country)
                                 <option value="{{$country->id}}">{{$country->country}}</option>
                               @endforeach
    
                              </select>
                                @error('country_id')<small class="text-danger">{{$message}}</small> @enderror
                            </div>
                            <div class="col-md-12 mb-3">
                                <label>State</label>
                                <input type="text" name = "state" class="form-control">
                                @error('state')<small class="text-danger">{{$message}}</small> @enderror
                            </div>
                            <div class="col-md-12 mb-3">
                            <label>Slug</label>
                                <input type="text" name = "slug" class="form-control">
                                @error('slug')<small class="text-danger">{{$message}}</small> @enderror
                            </div>
                            <div class="col-md-12 mb-3">
                            <label>Address</label>
                                <input type="text" name ="address" class="form-control">
                                @error('address')<small class="text-danger">{{$message}}</small> @enderror
                            </div>
                            <div class="col-md-12 mb-3">
                                <label>Description</label>
                                <textarea type="text" name = "description" class="form-control" row="3"></textarea>
                                @error('description')<small class="text-danger">{{$message}}</small> @enderror
                            </div>
                            <div class="col-md-12 mb-3">
                            <label>Image</label>
                                <input type="file" name = "image[]" multiple class="form-control">
                                @error('image')<small class="text-danger">{{$message}}</smal> @enderror
                            </div>
                            <div class="col-md-12 mb-3">
                            <label>Selling Price</label>
                                <input type="number" name ="selling_price" multiple class="form-control">
                                @error('selling_price')<small class="text-danger">{{$message}}</smal> @enderror
                            </div>
                            <div class="col-md-12 mb-3">
                            <label>Original Price</label>
                                <input type="number" name ="original_price" multiple class="form-control">
                                @error('original_price')<small class="text-danger">{{$message}}</smal> @enderror
                            </div>
                    <div class="col-md-12 mb-3">
                    <label> Status </label>
                     @error('status')<small class="text-danger">{{$message}}</smal> @enderror
                <select class="form-control form-control-lg" name="status" id="exampleFormControlSelect1">          
                           
                                <option value="On Sale">On Sale</option>
                                <option value="Sold">Sold</option>
                                <option value="On Rent">On Rent</option>
                                <option value="Rented">Rented</option>                            
                              </select>
                    </div>
                            <div class="col-md-12 mb-3">
                            <label>Trending</label><br/>
                                <input type="checkbox" name = "trending">
                                @error('trending')<small class="text-danger">{{$message}}</smal> @enderror
                            </div>
                            
                            <div class="col-md-12 mb-3">
                            <button type = "submit" class="btn btn-primary float-end">Save</button>
                            </div>
                            </div>
                            

                             <div class="progress">
                             <div class="progress-bar" aria-valuenow="" aria-valuemin="0" aria-valuemax="100" style="width: 0%">
                                0%
                              </div>
                              </div>
                              <div id="success" class="row">
                              </div>






                    </div>

                </div>
                </div>
                </div>
</div>

<script>
$(document).ready(function(){
    $('form').ajaxForm({
        beforeSend:function(){
            $('#success').empty();
            $('.progress-bar').text('0%');
            $('.progress-bar').css('width', '0%');
        },
        uploadProgress:function(event, position, total, percentComplete){
            $('.progress-bar').text(percentComplete + '0%');
            $('.progress-bar').css('width', percentComplete + '0%');
        },
        success:function(data)
        {
            if(data.success)
            {
                $('#success').html('<div class="text-success text-center"><b>'+data.success+'</b></div><br /><br />');
                $('#success').append(data.image);
                $('.progress-bar').text('Uploaded');
                $('.progress-bar').css('width', '100%');
            }
        }
    });
});
</script>

@endsection