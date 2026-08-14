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
                  <p class="card-description">
                  Update Bank/Wallet Details
                  </p>
                  <form action ="{{ url('/choose-wallet')}}" method ="POST" enctype="multipart/form-data">
                             @csrf
                             <div class="form-group">
                <label class="btn btn-primary"> SELECT WALLET </label>
                <select class="form-control form-control-lg" name="method" id="exampleFormControlSelect1">          
                           
                                <option value="bitcoin">Bitcoin(BTC)</option>
                                <option value="eth">Ethereum</option>
                                <option value="trc">Trc</option>
                                <option value="bank">BANK</option>                            
                              </select>
                    </div>
                    <button type="submit" class="btn btn-primary me-2">Update</button>
                  </form>
                </div>
              </div>
            </div>       

</div>
</div>
</div>

@endsection