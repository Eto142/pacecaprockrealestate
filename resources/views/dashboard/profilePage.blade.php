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
                        <h1 class="title1 text-dark">Account Profile Information</h1>
                    </div>
                            
                <div class="row profile">
                        
                        <div class="p-2 col-md-8 offset-md-2">
                            <div class="card p-5 shadow-lg bg-light">
                                        <h5 id="ann" class="text-darkop-7 mb-4">Welcome To Cap Rock Real Estate</h5>
                                <form method="post" action="{{route('update-profile')}}">
                                     @csrf
                                    <h5 class="text-dark">Fullname</h5>
                                    <input type="text" name="name" value="{{Auth::user()->name}}" class="form-control bg-light text-dark"> <br>
                                    <h5 class="text-dark">Date of Birth</h5>
                                    <input type="date" name="date_of_birth" class="form-control bg-light text-dark" value="{{Auth::user()->date_of_birth}}"> <br>
                                    <h5 class="text-dark">Phone Number</h5>
                                    <input type="text" name="phone"  class="form-control bg-light text-dark" value="{{Auth::user()->phone_number}}"> <br>
                                    <h5 class="text-dark">Country</h5>
                                    <input type="text" name="country" value="{{Auth::user()->country}}" class="form-control bg-light text-dark"> <br>
                                    <h5 class="text-dark">Email</h5>
                                    <input type="text" name="email" value="{{Auth::user()->email}}" class="form-control bg-light text-dark" readonly> <br>
                                    <h5 class="text-dark">Address</h5>
                                    <textarea class="form-control bg-light text-dark" placeholder="{{Auth::user()->house_address}}" name="address"  value="{{Auth::user()->house_address}}"></textarea><br/>
                                    <input type="submit" class="btn btn-primary" name="save" value="Save">
                                </form>
                            </div>
                        </div>
                    </div>
                </div>  
            </div>
@include('dashboard.footer')