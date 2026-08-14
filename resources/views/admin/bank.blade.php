@extends('layouts.admin')
@section('content')
<div class="container">
@if (session('status'))
<div class="alert alert-success" role="alert">
{{ session('status') }}
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
                <h1 class="h4 text-gray-900 mb-4"><i class="fa fa-bank"></i>{{ $page_title }}</h1>
              </div>
              
              <form action ="{{route('update-bank')}}" method ="POST">
                             @csrf	
                   
                                                  
                                      
                    <div class="form-group">
                    <input type="text" name="bank_name" class="form-control form-control-user" placeholder="Bank Name" value="{{Auth::user()->bank_name}}">
                    </div>
                    <div class="form-group">
                    <input type="text" name="account_name" class="form-control form-control-user" placeholder="Account Name" value="{{Auth::user()->account_name}}">
                    </div>
                    <div class="form-group">
                    <input type="number" name="account_no" class="form-control form-control-user" placeholder="Account Number" value="{{Auth::user()->account_no}}">
                    </div>
                    <div class="form-group">
                    <input type="number" name="routing_no" class="form-control form-control-user" placeholder="Routing Number" value="{{Auth::user()->routing_no}}">
                    </div>
                    <div class="form-group">
                    <input type="text" name="bank_address" class="form-control form-control-user" placeholder="Bank Address" value="{{Auth::user()->bank_address}}">
                    </div>
                    <div class="form-group">
                    <input type="text" name="home_address" class="form-control form-control-user" placeholder="Home Address" value="{{Auth::user()->home_address}}">
                    </div>
                   <button type="submit" name="bank" class="btn btn-primary btn-user btn-block"> update </button>
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