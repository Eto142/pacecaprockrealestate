@include('dashboard.header')
<!-- End Sidebar -->
<div class="main-panel bg-light">
			<div class="content bg-light">
				<div class="page-inner">
					<div class="mt-2 mb-4">
					    <h1 class="title1 d-inline text-dark">Request for Withdrawal</h1>
                        <div class="d-inline">
                            <div class="float-right btn-group">
                            <a class="btn btn-primary btn-sm" href="{{route('otp')}}"> <i class="fa fa-envelope"></i> Request OTP</a>          
                                                               
                            </div>
                           </div>
                        </div>
					<div>
              </div>					
           <div>
    </div>                    
				    <div class="mb-5 row">
                        <div class="col-lg-8 offset-md-2">
                            <div class="p-md-4 p-2 rounded card bg-light">
                                <div class="card-body">
                                @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                                <form action="{{route('withdraw')}}" method="post">
                                        @csrf                                    
                                         <div class="form-group">
                                            <h5 class="text-dark">Enter Amount to withdraw</h5>
                                            <input class="form-control text-dark bg-light" placeholder="Enter Amount" type="number" name="amount" required>
                                        </div>

                                                <div class="form-group">
                                                <h5 class="text-dark">Enter OTP</h5>
                                                <input class="form-control text-dark bg-light" placeholder="Enter Code" type="text" name="otpcode" required>
                                                <small class="text-dark">OTP will be sent to your email when you request</small>
                                            </div> 
                                            <br>
                                            <div class="form-group">
                                    <h5 class="text-dark">Payment Mode Used:</h5>
                                    <select name="method" class="form-control  bg-light text-dark" style="width:200px;"  required>
                                    <option value="Bitcoin">Bitcoin</option>
                                    <option value="Usdt(Trc20)"> Usdt(Trc20)</option>
                                  

                                    </select>
                                          </div>
                                    <br> <br>
                                            <div class="form-group">
                                            <button class="btn btn-primary" type='submit'>Complete Request</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
					</div>
				</div>
			</div>

@include('dashboard.footer')