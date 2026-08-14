@extends('layouts.admin')

@section('content')
<div class="main-panel">
<div class="content-wrapper">
@if (session('status'))
<div class="alert alert-success" role="alert">
 {{ session('status') }}
</div>
 @endif
          
 <div class="col-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Send Mail</h4>
                  <form method="post" action="{{url('/send-user-email')}}">
                                    @csrf
                    <div class="form-group">
                      <label for="exampleInputEmail3">Email</label>
                      <input type="email" class="form-control" name="email" id="exampleInputEmail3" placeholder="Email">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputName1">Subject</label>
                      <input type="text" class="form-control" name="subject" id="exampleInputName1" placeholder="Name">
                    </div>
                    <div class="form-group">
                      <label for="exampleTextarea1">Message</label>
                      <textarea class="form-control" id="exampleTextarea1" rows="4" name="message"></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary me-2">Send</button>
                  </form>
                </div>
              </div>
            </div>
</div>
</div>
</div>

@endsection