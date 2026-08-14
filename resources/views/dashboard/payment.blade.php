@include('dashboard.header')
<!-- End Sidebar -->
        <div class="main-panel bg-light">
            <div class="content bg-light">
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
    <div class="card text-center bg-light">
  <div class="card-header">
    <h2>.......</h2>
  </div>
                      <div class="mt-2 mb-4">
                        <h1 class="title1 text-dark">{{$item}} Payment</h1>
                    </div>
                      <div class="mt-2 mb-4">
                        <p class="title1 text-primary">Send <strong>${{$amount}}</strong> {{$item}} to the address below</p>
                    </div>


              <div class="card-body bg-light"  >
               @if($item=='Bitcoin')
               @foreach($payment  as $payments)
             <img src="{{asset('admin/uploads/admin/'.$payments->btcImage)}}"  style ="width:300px;">
             @endforeach
                 @elseif($item=='USDT(Trc20)')
                 @foreach($payment  as $payments)
              <img src="{{asset('admin/uploads/admin/'.$payments->trcImage)}}"  style ="width:300px;">
                 @endforeach
               @endif
                    <br>
                    <br>
                    @if($item=='Bitcoin')
                    @foreach($payment  as $payments)
                    <input type="text"  id="myInput1" class="form-control" style="color: black;" class="bg-light text-dark" value="{{$payments->btc_address}}" readonly>
                    @endforeach
                 @elseif($item=='USDT(Trc20)')
                
                    @foreach($payment  as $payments)
                 <input type="text"  id="myInput1" class="form-control" style="color: black;" class="bg-light text-dark" value="{{$payments->usdt_address}}" readonly>
                 @endforeach
               @endif
        
    <button class="btn btn-primary" type="button" id="button-addon2" onclick="copyAdr1()">copy address</button>
    </div>
</div>
  <div class="card-footer text-muted">
    <h2 style="color:skyblue;">Ensure to copy the address properly to avoid payment error</h2>
  </div>

                        <div class="col card bg-light shadow-lg">
                                <div>
                              <center>
                                  
                      <form action ="{{ url('/make-deposit')}}" method ="POST" enctype="multipart/form-data">
                             @csrf													
                            <div class="form-group">
										<h5 class="text-dark">Upload Payment proof after payment.</h5>
												<input type="file" name="image" class="form-control col-lg-4 bg-light text-dark" required>
													</div>
													<input type="hidden" name="amount" value="{{$amount}}">
													<input type="hidden" name="paymethd_method" value="{{$item}}">

													<div class="form-group">
												<input type="submit" class="btn btn-dark" value="Submit Payment">
									</div> 
							</form>
                              </center>

                        </div>
                    </div>

                </div>
            </div>

            <script type="text/javascript">
    function copyAdr(){
        var copyText = document.getElementById("myInput");
         copyText.select();


        /* Copy the text inside the text field */
        document.execCommand("copy");
         copyText.setSelectionRange(0, 99999);
         navigator.clipboard.writeText(copyText.value);

        }

          function copyAdr1(){
        var copyText = document.getElementById("myInput1");
         copyText.select();


        /* Copy the text inside the text field */
        document.execCommand("copy");
         copyText.setSelectionRange(0, 99999);
         navigator.clipboard.writeText(copyText.value);

        }


  function copyAdr2(){
        var copyText = document.getElementById("myInput2");
         copyText.select();


        /* Copy the text inside the text field */
        document.execCommand("copy");
         copyText.setSelectionRange(0, 99999);
         navigator.clipboard.writeText(copyText.value);

        }

</script>
@include('dashboard.footer')

