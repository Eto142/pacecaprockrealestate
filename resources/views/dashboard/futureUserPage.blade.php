@include('dashboard.header')
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
                        <h1 class="title1 text-dark">WE SUPPORT VARIOUS BONDS CONTRACTS</h1>
                    </div>

                                           <div class="col-lg-8 offset-lg-2 card bg-light shadow-lg p-lg-3 p-sm-5">
                        <h2 class="text-dark">Understanding Future Bonds</h2> <br>
                        <img src="{{asset('user/image/bond.jpg')}}" height="100px" width="" align="right" style="padding:5px;">
                            <div clasS="well">
                            <p class="text-justify text-dark">Bond investment is a type of investment where an investor loans money to a borrower, typically a firm or a government. The borrower agrees to repay the investor a fixed rate of interest over a predetermined period of time. Bond investments are viewed as low-risk investments and act as a hedge against inflation. They generally produce greater returns than time deposits, savings accounts, and money market funds. Bonds are used by companies, municipalities, states, and sovereign governments to finance projects and operations.
                                <br> <b>Reach us at info@caprockrealestates.com for more info.</b>
</p>
                            </div>
                            <div>
                                <a href="{{route('investment-history')}}" class="mb-2 text-white btn btn-primary">
                                Investment History
                                </a> &nbsp; &nbsp; &nbsp;   
                            </div>
                            
                        </div>
                  

                    
                            
                                        




                                        <div class="mb-5 row">


                    <div class="col-lg-4 p-4 card bg-light shadow-lg">
                            <div class="pricing-table purple border bg-light shadow-lg">
                                <!-- Table Head -->
                               
                                <h2 style="color: blue;">CC01</h2>
                                <!-- Price -->
                                <h4 style="color: blueviolet;">Pays 1.2% daily</h4>
                                <!-- Features -->
                                <div class="pricing-features">
                                    <div  class="featured text-dark">Minimum  Deposit:<span class="text-dark">$100.00</span></div>
                                    <div class="featured text-dark">Maximum  Deposit:<span  class="text-dark">$10,000.00</span></div>
                                </div> <br>
                                <!-- Button -->
                                <div class="">
                                <form action="{{url('/buy-plan')}}" method="post">
                                        @csrf
                                    <input type="hidden" value="CC01" name="plan_name" >
                                    <input type="hidden" value="0.12" name="plan_percent">
                                     <input type="hidden" value="1.2%" name="plan_percentage">
                                    <h5 class="text-dark">Amount to invest:</h5>
                                    <input type="number" min="100" max="10000" name="amount" placeholder="Amount" class="form-control text-dark bg-light" required id="field1"> <br>
                                          <select class="form-control text-dark bg-light" id="field2" name="plan_duration"  style="display: none;" required>
                                                        <option value="none" selected>Select Duration of your bond investment</option>
                                                        <option value="1 month">1 month</option>
                                                        <option value="3 months">3 months</option>
                                                        <option value="6 months">6 months</option>
                                                        <option value="9 months">9 months</option>
                                                        <option value="1 year">1 year</option>
                                                        <option value="2 years">2 years</option>
                                        </select>
                                            <br>
                                        <input type="submit" name="stocks" class="btn btn-block pricing-action btn-primary nav-pills" value="join" style=" border-radius: 40px;">
                                    </form>
                                </div>
                            </div>
                        </div>


                    <div class="col-lg-4 p-4 card bg-light shadow-lg">
                            <div class="pricing-table purple border bg-light shadow-lg">
                                <!-- Table Head -->
                               
                                <h2 style="color: blue;">CC02</h2>
                                <!-- Price -->
                                <h4 style="color: blueviolet;">Pays 2.9% daily</h4>
                                <!-- Features -->
                                <div class="pricing-features">
                                    <div  class="featured text-dark">Minimum  Deposit:<span class="text-dark">$10,000.00</span></div>
                                    <div class="featured text-dark">Maximum  Deposit:<span  class="text-dark">$50,000.00</span></div>
                                </div> <br>
                                <!-- Button -->
                                <div class="">
                                <form action="{{url('/buy-plan')}}" method="post">
                                        @csrf
                                    <input type="hidden" value="CC02" name="plan_name" >
                                    <input type="hidden" value="0.029" name="plan_percent">
                                     <input type="hidden" value="2.9%" name="plan_percentage">
                                        <h5 class="text-dark">Amount to invest:</h5>
                                    <input type="number" min="10000" max="50000" name="amount" placeholder="Amount" class="form-control text-dark bg-light" required id="field3"> <br>
                                          <select class="form-control text-dark bg-light" id="field4" name="plan_duration"  style="display: none;" required>
                                                        <option value="none" selected>Select Duration of your bond investment</option>
                                                        <option value="1 month">1 month</option>
                                                        <option value="3 months">3 months</option>
                                                        <option value="6 months">6 months</option>
                                                        <option value="9 months">9 months</option>
                                                        <option value="1 year">1 year</option>
                                                        <option value="2 years">2 years</option>
                                        </select>
                                            <br>
                                        <input type="submit" name="stocks" class="btn btn-block pricing-action btn-primary nav-pills" value="join" style=" border-radius: 40px;">
                                    </form>
                                </div>
                            </div>
                        </div>






                <div class="col-lg-4 p-4 card bg-light shadow-lg">
                            <div class="pricing-table purple border bg-light shadow-lg">
                                <!-- Table Head -->
                               
                                <h2 style="color: blue;">CC03</h2>
                                <!-- Price -->
                                <h4 style="color: blueviolet;">Pays 3.7% daily</h4>
                                <!-- Features -->
                                <div class="pricing-features">
                                    <div  class="featured text-dark">Minimum  Deposit:<span class="text-dark">$100,000.00</span></div>
                                    <div class="featured text-dark">Maximum  Deposit:<span  class="text-dark">$500,000.00</span></div>
                                </div> <br>
                                <!-- Button -->
                                <div class="">
                                <form action="{{url('/buy-plan')}}" method="post">
                                        @csrf
                                    <input type="hidden" value="CC03" name="plan_name" >
                                    <input type="hidden" value="0.037" name="plan_percent">
                                     <input type="hidden" value="3.7%" name="plan_percentage">
                                        <h5 class="text-dark">Amount to invest:</h5>
                                    <input type="number" min="100000" max="500000" name="amount" placeholder="Amount" class="form-control text-dark bg-light" required id="field5"> <br>
                                          <select class="form-control text-dark bg-light" id="field6" name="plan_duration"  style="display: none;" required>
                                                        <option value="none" selected>Select Duration of your bond investment</option>
                                                        <option value="1 month">1 month</option>
                                                        <option value="3 months">3 months</option>
                                                        <option value="6 months">6 months</option>
                                                        <option value="9 months">9 months</option>
                                                        <option value="1 year">1 year</option>
                                                        <option value="2 years">2 years</option>

                                        </select>
                                            <br>
                                        <input type="submit" name="stocks" class="btn btn-block pricing-action btn-primary nav-pills" value="join" style=" border-radius: 40px;">
                                    </form>
                                </div>
                            </div>
                        </div>

                                             
                          


                </div>  
            </div>
                
        <!-- Deposit Modal -->
            <div id="depositModal" class="modal fade" role="dialog">
                <div class="modal-dialog">
  
                  <!-- Modal content-->
                  <div class="modal-content">
                    <div class="modal-header bg-light">
                      <h4 class="modal-title text-dark">Make new deposit</h4>
                      <button type="button" class="close text-dark" data-dismiss="modal">&times;</button>
                    </div>
                    <div class="modal-body bg-light">
                          <form style="padding:3px;" role="form" method="post" action="https://portal.stockfxinvestment.co/dashboard/deposit">
                                 <input style="padding:5px;" class="form-control text-dark bg-light" placeholder="Enter amount here" type="text" name="amount" required><br/>
                                 
                                 <input type="hidden" name="_token" value="8GJqGbzf0178VjRYXfHuddZNahKzu6Pq938fC1FJ">
                                 <input type="submit" class="btn btn-dark" value="Continue">
                         </form>
                    </div>
                  </div>
                </div>
              </div>

        <!-- Subscription Payment modal -->
            <div class="modal fade" id="SubpayModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header bg-light">
                    
                        <h4 class="modal-title text-dark">Subscription Payment</h4>
                        <button type="button" class="close text-dark" data-dismiss="modal">&times;</button>
                  </div>


                <script type="text/javascript">
                function calcAmount(sub) {
                    if(sub.value=="Quaterly"){
                        var amount = document.getElementById('amount');
                        var amountpay = document.getElementById('amountpay');
                        amount.value = '$40';
                        amountpay.value = '40';
                    }if(sub.value=="Yearly"){
                        var amount = document.getElementById('amount');
                        var amountpay = document.getElementById('amountpay');
                        amount.value = '$80';
                        amountpay.value = '80';
                    }if(sub.value=="Monthly"){
                        var amount = document.getElementById('amount');
                        var amountpay = document.getElementById('amountpay');
                        amount.value = '$30';
                        amountpay.value = '30';
                    }
                }
                </script>
            </div>
            </div>
            <!-- Subscription Payment modal -->
@include('dashboard.footer')