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
                        <h1 class="title1 text-dark">WE PROVIDE GEO-LOCATION BASED REAL ESTATE INVESTMENT TRUSTS</h1>
                    </div>

        <div class="col-lg-8 offset-lg-2 card bg-light shadow-lg p-lg-3 p-sm-5">
                        <h2 class="text-dark">Understanding Rental Properties Investment</h2> <br>
                        <img src="{{asset('user/image/real.jpg')}}" height="100px" width="" align="right" style="padding:5px;">
                            <div class="well">
                            <p class="text-justify text-dark">Rental properties is a type of security that provides investors with a way to participate in the ownership and management of a real estate portfolio in a cost-effective and diversified manner. Rental property is not just about owning shares of a physical asset, it's about building a solid foundation for your financial future with the ability to generate passive income. Rental can be a great way to diversify your portfolio and achieve your financial goals.<br> <b>Reach us at info@caprockrealestates.com for more info.</b>
</p>
                            </div>
                            <div>
                                <a href="{{route('investment-history')}}" class="mb-2 text-white btn btn-primary">
                                Investment History
                                </a> &nbsp; &nbsp; &nbsp;   
                            </div>
                            
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
                               
                                  <h2 style="color: blue;">RENTAL I</h2>
                                <!-- Price -->
                                <h4 style="color: blueviolet;">Pays 0.65% daily</h4>
                                <!-- Features -->
                                <div class="pricing-features">
                                    <div  class="featured text-dark">Minimum  Deposit:<span class="text-dark">$5,000.00</span></div>
                                    <div class="featured text-dark">Maximum  Deposit:<span  class="text-dark">$95,000.00</span></div>
                                </div> <br>
                                <!-- Button -->
                                <div class="">
                                <form action="{{url('/buy-plan')}}" method="post">
                                        @csrf
                                    <input type="hidden" value="RENTAL I" name="plan_name" >
                                    <input type="hidden" value="0.0065" name="plan_percent">
                                     <input type="hidden" value="0.65%" name="plan_percentage">
                                    <h5 class="text-dark">Amount to invest:</h5>
                                    <input type="number" min="5000" max="95000" name="amount" placeholder="Amount" class="form-control text-dark bg-light" required id="field1"> <br>
                                          <select class="form-control text-dark bg-light" id="field2" name="plan_duration"  style="display: none;" required>
                                                        <option value="none" selected>Select Duration of your Real Estate investment</option>
                                                        <option value="1 year">1 year</option>
                                                        <option value="2 years">2 years</option>
                                                        <option value="5 years">5 years</option>
                                                        <option value="10 years">10 years</option>
                                                        <option value="20 years">20 years</option>
                                                        <option value="lifetime">lifetime</option>
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
                               
                                <h2 style="color: blue;">RENTAL-II</h2>
                                <!-- Price -->
                                <h4 style="color: blueviolet;">Pays 0.35% daily</h4>
                                <!-- Features -->
                                <div class="pricing-features">
                                    <div  class="featured text-dark">Minimum  Deposit:<span class="text-dark">$1,000.00</span></div>
                                    <div class="featured text-dark">Maximum  Deposit:<span  class="text-dark">$50,000.00</span></div>
                                </div> <br>
                                <!-- Button -->
                                <div class="">
                                <form action="{{url('/buy-plan')}}" method="post">
                                        @csrf
                                    <input type="hidden" value="REIT - II" name="plan_name" >
                                    <input type="hidden" value="0.0035" name="plan_percent">
                                     <input type="hidden" value="0.35%" name="plan_percentage">
                                        <h5 class="text-dark">Amount to invest:</h5>
                                    <input type="number" min="1000" max="50000" name="amount" placeholder="Amount" class="form-control text-dark bg-light" required id="field3"> <br>
                                          <select class="form-control text-dark bg-light" id="field4" name="plan_duration"  style="display: none;" required>
                                                        <option value="none" selected>Select Duration of your Real Estate investment</option>
                                                        <option value="1 year">1 year</option>
                                                        <option value="2 years">2 years</option>
                                                        <option value="5 years">5 years</option>
                                                        <option value="10 years">10 years</option>
                                                        <option value="20 years">20 years</option>
                                                        <option value="lifetime">lifetime</option>
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