@extends('layouts.admin')
@section('content')
<div class="container">
@if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    @if($message = Session::get('success'))
                      <div class="alert alert-success">
                   <p>{{$message}}</p>
                      </div>
                   @endif

<!-- Outer Row -->
<div class="row justify-content-center">

  <div class="col-xl-6 col-lg-6 col-md-6">

    <div class="card o-hidden border-0 shadow-lg my-5">
      <div class="card-body p-0">
        <!-- Nested Row within Card Body -->
        <div class="row">
          <div class="col-lg-12">
            <div class="p-5">
              <div class="text-center">
                <h1 class="h4 text-gray-900 mb-4">update your BTC wallets</h1>
              </div>

              <form method="post" action="{{route('update-btc')}}" enctype="multipart/form-data">
                                     @csrf

                    <div class="form-group">
                    <input type="text" name="btc_address" class="form-control form-control-user" placeholder="New wallet address" value="{{Auth::user()->btc_address}}">
                    </div>
                    <div class="form-group">
                    <input type="file" name = "image"  class="form-control">
                        <img src="{{asset('admin/uploads/admin/'.Auth::user()->btcImage)}}" width="60px" height="60px"/>
                        @error('image')<small class="text-danger">{{$message}}</smal> @enderror
                        </div>
                   <button type="submit" name="usdt" class="btn btn-primary btn-user btn-block"> update </button>
                    <hr>
                </form>




            </div>
          </div>
        </div>
      </div>
    </div>

  </div>

</div>

</div>

@endsection