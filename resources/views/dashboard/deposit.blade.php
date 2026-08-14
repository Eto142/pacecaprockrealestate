@include('dashboard.header')
<style>
    .input-hidden {
  /* For Hiding Radio Button Circles */
  position: absolute;
  left: -9999px;
}

input[type="radio"]:checked + label > img {
  border: 1px solid rgb(157, 255, 0);
  box-shadow: 0 0 3px 3px #9e00e2;
}

input[type="radio"] + label > img {
  border: 1px rgb(0, 0, 0);
  padding: 10px;

  transition: 500ms all;
}

input[type="radio"]:checked + label > img {
  transform: rotateZ(-10deg) rotateX(10deg);
}
</style>





<div class="main-panel bg-light">
			<div class="content bg-light">
				<div class="page-inner">
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
					<div class="mt-2 mb-4">
						<h1 class="title1 text-dark">Fund Your Account</h1>
					</div>
					<div>
    </div>					<div>
    </div>					<div class="row">
						<div class="col-md-12">
							<div class="card bg-light">
								<div class="card-body">
									<div class="row">
										<div class="col-md-8">
											
											<form method="post" action="{{url('get-deposit')}}" >
												{{ csrf_field()}}
                                            <div class="row">
													<div class="mb-4 col-md-12">
														<h5 class="card-title text-dark">Enter Amount</h5>
														<input class="form-control text-dark bg-light" placeholder="Enter Amount" type="number" name="amount" required>
													</div>
													<div class="mb-4 col-md-12">
														<input type="hidden" name="payment_method" id="paymethod">
													</div>
                                             <div class="mb-4 col-md-12">
														<input type="hidden" name="payment_address" id="paymethod" value="3Dwqqvvk2q7B8gWNPRthN4hjqk4ApDTdpn">
													</div>
													<div class="mt-2 mb-1 col-md-12">
														<h5 class="card-title text-dark">Choose Payment Method from the list below</h5>
													</div>

													<div class="mb-2 col-md-6">
								
													<div class="rounded shadow bg-light">
														<div class="card-body">
                                                        <input type="radio" id="radiobtn3" name="item" class="Send_data  input-hidden" value="Bank" />

                                                    <label for="radiobtn3">
                                                       <img src="{{asset('user/images/bank-transfer.png')}}" style="width:130px;border-radius:20px;" />
                                                       <br><br>
                                                   <span class="text-dark">
                                                      Bank Transfer
                                                    </span> 
                                                    </label>
													</div>
													</div>
													</div>


                                                    <div class="mb-2 col-md-6">
								
                                          <div class="rounded shadow bg-light">
                                           <div class="card-body">
                                           <input type="radio" id="radiobtn2" name="item" class="Send_data  input-hidden" value="Bitcoin" />

                                           <label for="radiobtn2">
                                           <img src="{{asset('user/images/btc.png')}}" style="width:130px;border-radius:20px;" />
                                           <br><br>
                                           <span class="text-dark">
                                            Bitcoin
                                            </span> 
                                            </label>
                                            </div>
                                             </div>
                                             </div>



                                                    <div class="mb-2 col-md-6">
								
                                <div class="rounded shadow bg-light">
                                    <div class="card-body">
                                    <input type="radio" id="radiobtn4" name="item" class="Send_data  input-hidden" value="USDT(Trc20)" />

                                <label for="radiobtn4">
                                   <img src="{{asset('user/images/trc.png')}}" style="width:130px;border-radius:20px;" />
                                   <br><br> 
                               <span class="text-dark">
                               USDT(Trc20) 
                                </span> 
                                </label>
                                </div>
                                </div>
                                </div>
								<div class="mt-2 mb-1 col-md-12">
								<input type="submit" class="px-5 btn btn-primary btn-lg" value="Proceed to Payment">
										</div>
																										
												</div>
											</form>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
                    <div id="loading" style="color:rgb(157, 255, 0)">

                 </div>
				</div>
			</div>


  <script>
    $(document).ready(function () {
  $(".Send_data").click(function (e) {
    if ($("input[type=radio][name=item]:checked").length == 0) {
      // alert("Please select atleast one");
      return false;
    } else {
      var item = $("input[type=radio][name=item]:checked").val();
      //  window.alert("You Selected")

      window.setTimeout(function () {
        // do whatever you want to do
        $("#loading").html("You Selected : " + item);
      }, 600);

      $("#loading").html(
        '<br><span class="spinner-border fast"  style="width: 2rem; height: 2rem;color:blue;"  role="status"></span>'
      );
    }
  });
});
  </script>

    @include('dashboard.footer')