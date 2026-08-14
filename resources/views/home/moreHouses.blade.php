@include('home.header')
    
   
<main id="main" class="main-img">

<section class="s-pt-120 s-pb-120">
    <div class="container">

        <div class="row justify-content-center">
            <div class="col-lg-6 text-center">
                <div class="section-top">
                    <h2 class="section-title">Buy a property in the popular countries</h2>
                </div>
            </div>
        </div>
    
        <div class="row justify-content-center gy-4">
      
        @foreach($trendingHouses as $house)
        
        <div class="col-xl-4 mb-2 col-md-6">
                <div class="invest-card">
                    <div class="invest-card-thumb">
                        <a href="{{ url('/house-details/'.$house->country->slug).'/'.$house->slug.'/'.$house->id}}" class="plan-link"></a>
                        <img src="{{asset($house->houseImages[0]->image)}}" alt="image">


                <button type="button" data-href="bookmark/6"
                            data-bookmark=""
                            class="invest-bookmark-btn ">

                            <i class="fa fa-heart first-bookmark"></i>
                            <i class="fa fa-heart second-bookmark"></i>
                        </button>

                        <div class="thumb-bottom">
                            <h4 class="title"><a href="">
                                    ${{$house->selling_price}}</a></h4>
                            <p class="location"><i class="bi bi-geo-alt"></i>{{$house->state}}
                            </p>
                            <div class="property-ratings">
                                                                       
                                                                          
                                   
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                   
                                   
                                    <span class="text-white">({{$house->rating}} Reviews)</span>
                            </div>
                        </div>
                    </div>
                    <div class="invest-card-content">
                        <div class="return-rate">
                            <div>
                                <p></p>
                                <h4 class="return-amount">
                                   
                                                                               
                                                                        </h4>
                            </div>
                           
                        </div>

                        <div class="other-options">
                            <div class="single-option">
                                <p>Location</p>
                                <h6>Country: {{$house->country->country}} </h6>
                            </div>
                            <div class="single-option">
                                <p>Status</p>
                                <h6>
                        {{$house->status}}
                            </h6>
                            </div>

            
                        </div>
                    </div>
                   
                </div>
            </div>
            @endforeach   
            </div>
               
        
                                     
                    </div>
    </div>
</section>





 
    </main>

@include('home.footer')