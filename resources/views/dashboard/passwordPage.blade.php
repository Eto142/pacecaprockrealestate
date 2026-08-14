@include('dashboard.header')
<div class="main-panel bg-light">
            <div class="content bg-light">
                <div class="page-inner">
                @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <div class="mt-2 mb-5">
                        <h1 class="title1 text-dark">Change Your password</h1> <br> <br>
                    </div>
                            
                                        <div class="mb-5 row">
                        <div class="col-lg-8 offset-lg-2 card p-4 shadow-lg bg-light">
                        <form method="post" action="{{route('update-password')}}">
                                     @csrf
                                <div class=" bg-light mb-2">
                                    <h5 class="text-dark">Current Password</h5>
                                    <input type="password" name="current_password" class="form-control text-dark bg-light" required>
                                </div>
                                <div class="bg-light mb-2">
                                    <h5 class="text-dark">New Password* :</h5>
                                    <input type="password" name="new_password" class="form-control text-dark bg-light" required>
                                </div>
                                <div class=" bg-light mb-2">
                                    <h5 class="text-dark">Confirm Password*:</h5>
                                    <input type="password" name="confirmPassword" class="text-dark bg-light form-control" required>
                                </div> <br>
                                    <input type="submit" class="btn btn-primary" value="Submit" name="change_password">
                            </form>
                        </div>
                    </div>
            </div>
</div>
@include('dashboard.footer')