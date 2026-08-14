@include('dashboard.header')
<div class="main-panel bg-light">
            <div class="content bg-light">
                <div class="page-inner">
                    <div class="mt-2 mb-4">
                    <h1 class="title1 text-dark">Transactions on your account</h1>
                    </div>
                            
                                        <div class="mb-5 row">
                    <div class="col text-center card p-4 bg-light">
                        
                            <nav>
                                <div class="nav nav-tabs nav-fill" id="nav-tab" role="tablist">
        
                                  <h4 class="pt-3 nav-item nav-link active " id="nav-home-tab" data-toggle="tab" href="#1" role="tab" aria-controls="nav-home" aria-selected="true"> Deposits</h4>
        
                                  <h4 class="pt-3 nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#2" role="tab" aria-controls="nav-profile" aria-selected="false">Withdrawals</h4>
        
                                  <h4 class="pt-3 nav-item nav-link" id="nav-contact-tab" data-toggle="tab" href="#3" role="tab" aria-controls="nav-contact" aria-selected="false">Investments</h4>
                                </div>
                            </nav>
                            
                            <div class="px-3 py-3 tab-content px-sm-0" id="nav-tabContent">
        
                                
                                <div class="tab-pane fade show active bg-light card p-3" id="1" role="tabpanel" aria-labelledby="nav-home-tab">
                                    <div class="bs-example widget-shadow table-responsive" data-example-id="hoverable-table"> 
                                    <table id="UserTable" class="UserTable table table-hover text-dark"> 
                                            <thead> 
                                                <tr> 
    
                                                    <th>Amount</th>
                                                    <th>Payment mode</th>
                                                    <th>Status</th> 
                                                    <th>Deposit Date</th>
                                                </tr> 
                                            </thead> 
                                              <tbody>
                                              @foreach($deposit as $deposithistory)
                                            <tr>
                                                    
                                                  
                                                    <td>${{number_format($deposithistory->amount, 2, '.', ',')}}</td>
                                                    <td>{{$deposithistory->payment_method}}</td>
                                                    @if($deposithistory->status=='0')
                                                    <td style="color:red">Pending</td>
                                                    @else <td style="color:green">Approved</td>
                                                    @endif
                                                    <td>{{$deposithistory->created_at}}</td>
                                                    

                                                </tr>
                                              @endforeach
                                            </tbody>                                       
                                         </table>
                                    </div>
                                </div>
        
                                
                                <div class="tab-pane fade p-3 bg-light" id="2" role="tabpanel" aria-labelledby="nav-profile-tab">
                                    <div class="bs-example widget-shadow table-responsive" data-example-id="hoverable-table"> 
                                    <table id="UserTable" class="UserTable table table-hover text-dark"> 
                                            <thead> 
                                                <tr> 
                                                <th>AMOUNT</th>
                                                <th>PAYMENT METHOD</th>
                                                <th>STATUS</th>             
                                                <th>DATE</th>
                                                <th>ACTION</th>
                                                </tr> 
                                            </thead> 
                                            <tbody>
                 @foreach($withdrawals  as $withdrawal)
                      <tr class="table-primary">
                            
                             <td>${{number_format($withdrawal->amount, 2, '.', ',')}}</td>
                             <td>{{$withdrawal->payment_method}}</td>
                             
                             <td>{{$withdrawal->created_at}}</td>
                             @if($withdrawal->status=='0')
                             <td style="color:red">pending</td>
                             @else <td style="color:green">approved</td>
                             @endif
                             <td>{{$withdrawal->created_at}}</td>
                     </tr>
                @endforeach     
                                            </tbody> 
                                        </table>
                                    </div>
                                </div>
        
                                
                                <div class="tab-pane fade p-3 bg-light" id="3" role="tabpanel" aria-labelledby="nav-contact-tab">
                                    <div class="bs-example widget-shadow table-responsive" data-example-id="hoverable-table"> 
                                    <table id="UserTable" class="UserTable table table-hover text-dark"> 
                                            <thead> 
                                                <tr> 
                                                    
                                                    <th>AMOUNT INVESTED</th>
                                                    <th>PLAN</th>
                                                    <th>RETURN IN PERCENTAGE</th>
                                                    <th>DURATION</th>
                                                    <th>STATUS</th>
                                                    <th>START</th>
                                                    <th>END</th>
                                                </tr> 
                                            </thead> 
                                            <tbody>                            
                                            <tr>
                                                    
                                            @foreach($investments as $investmentHistory)
                                            <tr>
                                                    
                                                  
                                                    <td>${{number_format($investmentHistory->amount, 2, '.', ',')}}</td>
                                                    <td>{{$investmentHistory->plan_name}}</td>
                                                    <td>{{$investmentHistory->plan_percentage *100}}%</td>
                                                    <td>{{$investmentHistory->plan_duration}}</td>
                                                    <td>{{$investmentHistory->status}}</td>
                                                    <td>{{$investmentHistory->plan_start}}</td>
                                                    <td>{{$investmentHistory->plan_end}}</td>
                                                    

                                                </tr>
                                              @endforeach
                                            </tbody> 
                                        </table>
                                        
                                    </div>
                                </div>
                                
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
                          <form style="padding:3px;" role="form" method="post" action="dashboard/deposit">
                                 <input style="padding:5px;" class="form-control text-dark bg-light" placeholder="Enter amount here" type="text" name="amount" required><br/>
                                 
                                 <input type="hidden" name="_token" value="6NaGyidaDCOFLkZcWpYVPwr1kiJc28fNpdWp70Sg">
                                 <input type="submit" class="btn btn-light" value="Continue">
                         </form>
                    </div>
                  </div>
                </div>
              </div>
              <!-- /deposit Modal -->
            
            
            <!-- Delete Subscription Modal -->
            <div id="delsubmodal" class="modal fade" role="dialog">
                <div class="modal-dialog">
                  <!-- Modal content-->
                  <div class="modal-content">
                    <div class="modal-header bg-light">
                      <h4 class="modal-title text-dark">Delete MT4 Details</h4>
                      <button type="button" class="close text-dark" data-dismiss="modal">&times;</button>
                    </div>
                    <div class="modal-body bg-light p-3">
                        <h5 class="text-dark">Your subscription has already started, send an Email to info@stockfxinvestment.co to have your MT4 Details Deleted.</h5>
                    </div>
                  </div>
                </div>
              </div>
              <!-- /deposit Modal -->
            
        


                      <!-- Withdrawal Modal -->
          <div id="withdrawalModal" class="modal fade" role="dialog">
            <div class="modal-dialog">

              <!-- Modal content-->
              <div class="modal-content">
                <div class="modal-header bg-light">
                  <h4 class="modal-title text-dark">Payment will be sent to your recieving address.</h4>
                  <button type="button" class="text-white close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body bg-light">
                      <form style="padding:3px;" role="form" method="post" action="dashboard/withdrawal">
                             <input style="padding:5px;" class="form-control bg-light text-dark" placeholder="Enter amount here" type="text" name="amount" required><br/>
                             
                             <input type="hidden" name="_token" value="6NaGyidaDCOFLkZcWpYVPwr1kiJc28fNpdWp70Sg">
                             <input type="submit" class="btn btn-light" value="Submit">
                     </form>
                </div>
              </div>
            </div>
          </div>
          <!-- /Withdrawals Modal -->

        

            

        <!-- Subscription Payment modal -->
            <div class="modal fade" id="SubpayModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header bg-light">
                    
                        <h4 class="modal-title text-dark">Subscription Payment</h4>
                        <button type="button" class="close text-dark" data-dismiss="modal">&times;</button>
                  </div>

                <form role="form" method="post" action="dashboard/deposit" id="priceform">
                <div class="modal-body bg-light">
                    
                    <h5 class="text-dark">Duration</h5>
                        <select class="form-control bg-light text-dark" onchange="calcAmount(this)" name="duration" class="duration" id="duratn">
                            <option value="default">Select duration</option>
                            <option>Monthly</option>
                            <option>Quaterly</option>
                            <option>Yearly</option>
                        </select><br>
                        <h5 class="text-dark">Amount to Pay</h5>
                        <input class="form-control subamount bg-light text-dark" type="text" id="amount" disabled><br/>
                        <input id="amountpay" type="hidden" name="amount">
                        <input type="hidden" value="Subscription Trading" name="pay_type">
                        <input type="hidden" name="_token" value="6NaGyidaDCOFLkZcWpYVPwr1kiJc28fNpdWp70Sg">
                </div>
                <div class="modal-footer bg-light">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Pay Now</button>
                </div>
                </div>
                </form>

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
            
            
        <!-- Submit MT4 MODAL modal -->
            <div id="submitmt4modal" class="modal fade" role="dialog">
              <div class="modal-dialog">
                <!-- Modal content-->
                <div class="modal-content">
                    <div class="modal-header bg-light">
                        <h4 class="modal-title text-dark">Submit your MT4 Login Details</h4>
                        <button type="button" class="close text-dark" data-dismiss="modal">&times;</button>
                  </div>
                    <div class="modal-body bg-light">
                        <form role="form" method="post" action="dashboard/savemt4details">
                              
                              <h5 class="text-dark ">MT4 ID*:</h5>
                            <input class="form-control bg-light text-dark"  type="text" name="userid" required><br/>
                            <h5 class="text-dark ">MT4 Password*:</h5>
                            <input style="padding:5px;" class="form-control bg-light text-dark"  type="text" name="pswrd" required><br/>
                            <h5 class="text-dark ">Account Type:</h5>
                            <input  class="form-control bg-light text-dark" Placeholder="E.g. Standard" type="text" name="acntype" required><br/>   
                            <h5 class="text-dark ">Currency*:</h5>
                            <input  class="form-control bg-light text-dark" Placeholder="E.g. USD" type="text" name="currency" required><br/>
                            <h5 class="text-dark ">Leverage*:</h5>
                            <input  class="form-control bg-light text-dark" Placeholder="E.g. 1:500"  type="text" name="leverage" required><br/>
                            <h5 class="text-dark ">Server*:</h5>
                            <input  class="form-control bg-light text-dark" Placeholder="E.g. HantecGlobal-live"  type="text" name="server" required><br/>
                            <h5 class="text-dark ">Subscription Duration:</h5>
                            <select class="form-control bg-light text-dark" name="duration" class="duration">
                                <option value="default">Select duration</option>
                                <option>Monthly</option>
                                <option>Quaterly</option>
                                <option>Yearly</option>
                            </select><br>

                            <input type="hidden" name="_token" value="6NaGyidaDCOFLkZcWpYVPwr1kiJc28fNpdWp70Sg">
                            <input type="submit" class="btn btn-primary" value="Submit">
                       </form>
                  </div>
                </div>
              </div>
            </div>
            @include('dashboard.footer')
