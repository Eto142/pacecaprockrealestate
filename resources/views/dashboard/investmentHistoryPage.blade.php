@include('dashboard.header')
<!-- End Sidebar -->
<div class="main-panel bg-light">
            <div class="content bg-light">
                <div class="page-inner">
                    <div class="mt-2 mb-4">
                        <h1 class="title1 text-dark">INVESTMENT HISTORY</h1>
                    </div>
                            
                                        <div class="row mb-5">
                        <div class="col text-center card shadow-lg bg-light p-3">
                            <div class="bs-example widget-shadow table-responsive" data-example-id="hoverable-table"> 
                                        <table id="UserTable" class="UserTable table table-hover text-dark"> 
                                            <thead> 
                                                <tr> 
                                                    
                                                    <th>CAPITAL</th>
                                                    <th>INTEREST</th>
                                                    <th>RETURN</th>
                                                    <th>DATE</th>
                                                </tr> 
                                            </thead> 
                                            <tbody>                            
                                            <tr>
                                                    
                                            @foreach($investments as $investmentHistory)
                                            <tr>
                                                    
                                                  
                                                    <td>${{number_format($investmentHistory->capital, 2, '.', ',')}}</td>
                                                    <td>${{number_format($investmentHistory->return, 2, '.', ',')}}</td>
                                                    <td>${{number_format($investmentHistory->capital + $investmentHistory->return, 2, '.', ',')}}</td>
                                                    <td>{{$investmentHistory->created_at}}</td>
                                                    

                                                </tr>
                                              @endforeach
                                            </tbody> 
                                        </table>

                            </div>
                        </div>
                    </div>
                </div>

@include('dashboard.footer')