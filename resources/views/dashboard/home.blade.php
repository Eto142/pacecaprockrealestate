@include('dashboard.header')
<!-- End Sidebar -->
<div class="main-panel bg-light">
            <div class="content bg-light">
                <div class="page-inner">
                    <div class="mt-2 mb-4">
                        <h2 class="text-dark pb-2">Welcome, {{Auth::user()->name}}!</h2>

                        
                    </div>

                    
                            <div class="container-fluid">
                                <!-- TradingView Widget BEGIN -->
                                <div style="width: 100%; height: 100%; background-color:white;">
                                    
                                    </div>
                                     <br>
                                     <br>


                                                             <!-- Beginning of  Dashboard Stats  -->
                        <div class="row row-card-no-pd bg-light shadow-lg">
                            <div class="col-sm-6 col-md-3 bg-light">
                                <div class="card card-stats card-round bg-light">
                                    <div class="card-body ">
                                        <div class="row">
                                            <div class="col-3">
                                            <div class="text-center icon-big">
                        <i class="fa fa-circle fa-stack-2x text-primary"></i>
                        <i class="fa fa-dollar fa-stack-1x text-white"></i>
                                            </div>
                                            </div>
                                            <div class="col-9 col-stats">
                                            <div class="text-dark" >
                                        <h5><b>USD BALANCE</b></h5>
                                                <br>
                                            <h4><b>${{number_format($balance, 2, '.', ',')}}</b></h4>                                                                                
                                            </div> 

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-6 col-md-3 bg-light">
                                <div class="card card-stats card-round bg-light">

                                    <div class="card-body ">
                                        <div class="row">
                                            <div class="col-3">
                                            <div class="text-center icon-big">
                        <i class="fa fa-circle fa-stack-2x text-warning"></i>
                        <i class="fa fa-dollar fa-stack-1x text-white"></i>
                                            </div>
                                            </div>
                                            <div class="col-9 col-stats">
                                        <div class="text-dark" >
                                          <h5><b>TOTAL WITHDRAWAL</b></h5>
                                                <br>
                                    <h4><b>${{number_format($withdrawal, 2, '.', ',')}}</b></h4>                                                                             
                                            </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-3 bg-light">
                                <div class="card card-stats card-round bg-light">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-3">
                                            <div class="text-center icon-big">
                        <i class="fa fa-circle fa-stack-2x text-primary"></i>
                        <i class="fa fa-money fa-stack-1x text-white"></i>
                                            </div>
                                            </div>
                                            <div class="col-9 col-stats">
                                            <div class="text-dark" >
                                    <h5><b>TOTAL DEPOSIT</b></h5>                                
                                                <br>
                                     <h4><b>${{number_format($deposit, 2, '.', ',')}}</b></h4>                                                                               
                                            </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-3 bg-light">
                                <div class="card card-stats card-round bg-light">

                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-3">
                                            <div class="text-center icon-big">
                        <i class="fa fa-circle fa-stack-2x text-warning"></i>
                        <i class="fa fa-money fa-stack-1x text-white"></i>
                                            </div>
                                            </div>
                                            <div class="col-9 col-stats">
                                            <div class="text-dark" >
                                                <h5><b>TOTAL PROFIT</b></h5>                                                                                                       
                                                <br>
                            <h5><b>${{number_format($earning, 2, '.', ',')}}</b></h5>                                     
                                            </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
           
                <div class="row">
<center>
<img src="{{asset('user/image/vanaman.jpg')}}" class="img-fluid">
<br>
</center>  <a href="{{route('deposit')}}"><input type="submit" class="btn btn-primary" name="payments" value="Deposit"></a>
<a href="{{route('withdrawal')}}"><input type="submit" class="btn btn-success" name="payments" value="Withdraw"></a>
</div>



                        
</div>
<br>
<br>
<br>
<br>
<br>
<br>
</div>
</div>
</div>
@include('dashboard.footer')