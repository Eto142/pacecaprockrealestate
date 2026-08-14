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
                        <h1 class="text-dark">Add your withdrawal info</h1>
                    </div>
                            
                                        <div class="mb-4 row">
                        <div class="col card p-3 shadow-lg bg-light">
                            <div class="accordion accordion-light ">
                                <form method="post" action="{{route('update-withdrawal')}}">
                                     @csrf
                                    <input type="hidden" name="name" value="{{Auth::user()->name}}">
                                    <input type="hidden" name="email" value="{{Auth::user()->email}}">
                                <!--............................... collapse one -->

                                    <!--............................... collapse two -->
                                <div class="card">
                                    <div class="card-header bg-light" id="headingTwo" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
                                        <div class="span-icon">
                                            <div class="fa fa-clone"></div>
                                        </div>
                                        <div class="span-title text-dark">
                                            BItcoin
                                        </div>
                                        <div class="span-mode"></div>
                                    </div>
                                    <div id="collapseTwo" class="collapse show" aria-labelledby="headingTwo" data-parent="#accordion">
                                        <div class="card-body bg-light shadow">
                                            <div class="form-group">
                                                <h5 class="text-dark">BTC ADDRESS</h5>
                                                <input type="text" name="btc_address" value="{{Auth::user()->btc_address}}"  class="form-control text-dark bg-light" placeholder="Enter Bitcoin Address">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <div class="card">
                                    <div class="card-header bg-light" id="headingTwo" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
                                        <div class="span-icon">
                                            <div class="fa fa-clone"></div>
                                        </div>
                                        <div class="span-title text-dark">
                                            Usdt(Trc20)
                                        </div>
                                        <div class="span-mode"></div>
                                    </div>
                                    <div id="collapseTwo" class="collapse show" aria-labelledby="headingTwo" data-parent="#accordion">
                                        <div class="card-body bg-light shadow">
                                            <div class="form-group">
                                                <h5 class="text-dark">USDT(Trc20) ADDRESS</h5>
                                                <input type="text" name="usdt_address" value="{{Auth::user()->usdt_address}}"  class="form-control text-dark bg-light" placeholder="Enter Bitcoin Address">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--......................... end of collaps four -->
                                <input type="submit" class="btn btn-primary" name="info" >  &nbsp; &nbsp; 
                                
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

@include('dashboard.footer')