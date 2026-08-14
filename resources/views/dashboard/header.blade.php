<!DOCTYPE html>
<html lang="en">
<head>
	<script type="text/javascript" src="https://js.stripe.com/v3/"></script>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="8GJqGbzf0178VjRYXfHuddZNahKzu6Pq938fC1FJ">
<link rel="shortcut icon" href="{{asset('user/../membership/images/favicon1.png')}}">
	
				<!-- Fonts and icons -->
		<script src="{{asset('user/dash/js/plugin/webfont/webfont.min.js')}}"></script>

            <!-- Sweet Alert -->
    <script src="{{asset('user/dash/js/plugin/sweetalert/sweetalert.min.js')}}"></script>

    <link rel='stylesheet' href="{{asset('user/https://cdn.jsdelivr.net/npm/sweetalert2@7.12.15/dist/sweetalert2.min.css')}}"></link>  
		<!-- CSS Files -->
		<link rel="stylesheet" href="{{asset('user/dash/css/bootstrap.min.css')}}">
		<link rel="stylesheet" href="{{asset('user/dash/css/fonts.min.css')}}">
		<link rel="stylesheet" href="{{asset('user/dash/css/atlantis.min.css')}}">
        <link rel="stylesheet" href="{{asset('user/dash/css/customs.css')}}">
		<link rel="stylesheet" href="{{asset('user/dash/css/style.css')}}">
		<link rel="stylesheet" href="{{asset('user/dash/css/atlantis.min.css')}}">

		<link rel="stylesheet" href="{{asset('user/https://cdn.datatables.net/buttons/1.6.2/css/buttons.dataTables.min.css')}}">
		<link rel="stylesheet" type="text/css" href="{{asset('user/https://cdn.datatables.net/v/bs4/dt-1.10.21/af-2.3.5/b-1.6.3/b-flash-1.6.3/b-html5-1.6.3/b-print-1.6.3/r-2.2.5/datatables.min.css')}}"/>
		<script src="{{asset('user/https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.8.1/dist/alpine.min.js')}}" defer></script>
        <link rel="stylesheet" href="{{asset('user/font-awesome/css/font-awesome.min.css')}}">

		<title>Dashboard</title>

		<!-- Livewire Styles -->
<style>
    [wire\:loading], [wire\:loading\.delay], [wire\:loading\.inline-block], [wire\:loading\.inline], [wire\:loading\.block], [wire\:loading\.flex], [wire\:loading\.table], [wire\:loading\.grid] {
        display: none;
    }

    [wire\:offline] {
        display: none;
    }

    [wire\:dirty]:not(textarea):not(input):not(select) {
        display: none;
    }

    input:-webkit-autofill, select:-webkit-autofill, textarea:-webkit-autofill {
        animation-duration: 50000s;
        animation-name: livewireautofill;
    }

    @keyframes livewireautofill { from {} }
</style>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script>
$(document).on('keyup',"#field1",function(){
     var val = $(this).val();
     if(val.length == 0)
     {
          $("#field2").hide();
     }
     else
     {
          $("#field2").show();
     }
})
</script>
<script>
$(document).on('keyup',"#field3",function(){
     var val = $(this).val();
     if(val.length == 0)
     {
          $("#field4").hide();
     }
     else
     {
          $("#field4").show();
     }
})
</script>
<script>
$(document).on('keyup',"#field5",function(){
     var val = $(this).val();
     if(val.length == 0)
     {
          $("#field6").hide();
     }
     else
     {
          $("#field6").show();
     }
})
</script>

<script>
$(document).on('keyup',"#field7",function(){
     var val = $(this).val();
     if(val.length == 0)
     {
          $("#field8").hide();
     }
     else
     {
          $("#field8").show();
     }
})
</script>


<script type="text/javascript">
    function validate_select() {
        var val_sel = document.inv.plan_duration.value;

        if (val_sel == 'none') {
            document.getElementById('error').innerHTML =
            '<div style="display: block; margin: 5px; padding: 5px; background-color: red; color: white; border-radius:8px;">Please select a valid duration</div>'
        }
    }
</script>
<script src="//code.tidio.co/94b4d25re1loeq2uk8gadua4gnmna42c.js" async></script>
</head>


<style>
  .float1 {
    position: fixed;
    width: 50px;
    height: 50px;
    bottom: 30px;
    left: 300px;
    background-color: blue;
    color: #FFF;
    border-radius: 50px;
    text-align: center;
    font-size: 20px;
    box-shadow: 2px 2px 3px #999;
    z-index: 100;
  }



  .my-float1 {
    margin-top: 16px;
  }


</style>
<body data-background-color="dark">
    
    	</script>
	 <script type="text/javascript">
    (function () {
        var options = {
            whatsapp: "+33779089485", // WhatsApp number
            call_to_action: "Message us", // Call to action
            position: "left", // Position may be 'right' or 'left'
        };
        var proto = document.location.protocol, host = "getbutton.io", url = proto + "//static." + host;
        var s = document.createElement('script'); s.type = 'text/javascript'; s.async = true; s.src = url + '/widget-send-button/js/init.js';
        s.onload = function () { WhWidgetSendButton.init(host, proto, options); };
        var x = document.getElementsByTagName('script')[0]; x.parentNode.insertBefore(s, x);
    })();
</script>

    <div id="app">
         <!--PayPal-->
        <script>
        
            // Add your client ID and secret
            var PAYPAL_CLIENT = 'iidjdjdj';
            var PAYPAL_SECRET = 'jijdjkdkdk';
            
            // Point your server to the PayPal API
            var PAYPAL_ORDER_API = 'https://api.paypal.com/v2/checkout/orders/';
        
            </script>
            
            <script
            src="https://www.paypal.com/sdk/js?client-id=iidjdjdj">
        </script>
        
        <!--/PayPal-->
        
        <div class="wrapper">
                    <div class="main-header">
    <!-- Logo Header -->
    <div class="logo-header" style="background-color:#000000">
        <a href="{{route('home')}}" class="logo" style="font-size: 5px; color:#fff;">
            <img src="{{asset('user/logo.png')}}" style="width: 150px; margin-right: 10px;">
        </a>
        <button class="ml-auto navbar-toggler sidenav-toggler" type="button" data-toggle="collapse" data-target="collapse" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon">
                <i class="fa fa-bars"></i>
            </span>
        </button>
        <button class="topbar-toggler more"><i class="icon-options-vertical"></i></button>
        <div class="nav-toggle">
            <button class="btn btn-toggle toggle-sidebar">
                <i class="fa fa-bars"></i>
            </button>
        </div>
    </div>
    <!-- End Logo Header -->

    <!-- Navbar Header -->
    <nav class="navbar navbar-header navbar-expand-lg" style="background-color:#000000;">
        
        <div class="container-fluid">
            <ul class="navbar-nav topbar-nav ml-md-auto align-items-center">
            <li class="nav-item hidden-caret">
                    <div id="google_translate_element"></div>
                </li>
                <li class="nav-item dropdown hidden-caret">
                    <a class="nav-link" data-toggle="dropdown" href="#" aria-expanded="false">
                        <i class="fa fa-user"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user animated fadeIn">
                        <div class="dropdown-user-scroll scrollbar-outer">
                            <li>
                                <a class="dropdown-item" href="changepassword">Change Password</a>
                                <a class="dropdown-item" href="{{route('withdrawal-page')}}">Account Settings</a>
                                <div class="dropdown-divider"></div>
                               

                                <a class="dropdown-item" href="{{url('/logout')}}"
                                    >
                                    Logout
                                    </a>
                             
                            </li>
                        </div>
                    </ul>
                </li>
            </ul>
        </div>
    </nav>
    <!-- End Navbar -->
</div>
<script type="text/javascript">
    $("#styleform").on('change',function(){
    $.ajax({
        url: "changetheme",
        type: 'POST',
        data:$("#styleform").serialize(),
        success: function (data) {
            location.reload(true);
        },
        error: function (data) {
            console.log('Something went wrong');
        },

    });
});
</script>        <!-- Stored in resources/views/child.blade -->

<!-- Sidebar -->

<div class="sidebar sidebar-style-2 bg-light">
    <div class="sidebar-wrapper scrollbar scrollbar-inner">
        <div class="sidebar-content">
            <div class="user">
                <div class="info">
                    <a data-toggle="collapse" href="#collapseExample" aria-expanded="true">
                        <span>
                              {{Auth::user()->name}}
                            
                            <span class="caret"></span>
                        </span>
                    </a>
                    <div class="clearfix"></div>
                    <div class="collapse in" id="collapseExample">
                        <ul class="nav">
                            <li>
                                <a href="{{route('withdrawal-page')}}">
                                    <span class="link-collapse">Account Settings</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <ul class="nav nav-primary">
                <li class="nav-item active">
                    <a href="{{route('home')}}">
                        <i class="fa fa-home"></i>
                        <p>Dashboard</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a data-toggle="collapse" href="#bases">
                        <i class="fa fa-user"></i>
                        <p>Account</p>
                        <span class="caret"></span>
                    </a>
                    <div class="collapse" id="bases">
                        <ul class="nav nav-collapse">
                            <li>
                                <a href="{{route('withdrawal-page')}}">
                                    <span class="sub-item">Account Settings</span>
                                </a>
                            </li>
                            <li>
                                <a href="{{route('profile')}}">
                                    <span class="sub-item">Profile</span>
                                </a>
                            </li>
                            <li>
                                <a href="{{route('password')}}">
                                    <span class="sub-item">Change Password</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="nav-item">
                    <a href="{{route('support')}}">
                        <i class="fa fa-life-ring" aria-hidden="true"></i>
                        <p>Support</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{route('stock')}}">
                        <i class="fa fa-signal " aria-hidden="true"></i>
                        <p>Invest In Stock</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{route('future')}}">
                        <i class="fa fa-signal " aria-hidden="true"></i>
                        <p>Invest In Bonds</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{route('real-estate')}}">
                        <i class="fa fa-signal " aria-hidden="true"></i>
                        <p>Invest In Real Estate</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{route('investment-history')}}">
                        <i class="fa fa-signal " aria-hidden="true"></i>
                        <p>Investment History</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{route('transaction-history')}}">
                        <i class="fa fa-briefcase " aria-hidden="true"></i>
                        <p>Transactions history</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a data-toggle="collapse" href="#dept">
                        <i class="fa fa-credit-card"></i>
                        <p>Deposit/Withdrawal</p>
                        <span class="caret"></span>
                    </a>
                    <div class="collapse" id="dept">
                        <ul class="nav nav-collapse">
                            <li>
                                <a href="{{route('deposit')}}">
                                    <span class="sub-item">Deposit</span>
                                </a>
                            </li>
                            <li>
                                <a href="{{route('withdrawal')}}">
                                    <span class="sub-item">Withdraw</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>

                <li class="nav-item">
                    <a data-toggle="collapse" href="#mpack">
                        <i class="fa fa-cubes"></i>
                        <p>Investment Packages</p>
                        <span class="caret"></span>
                    </a>
               
                </li>  
                <li class="nav-item">
                    <a href="{{url('/logout')}}">
                        <i class="fa fa-recycle " aria-hidden="true"></i>
                        <p>Logout</p>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</div>
<!-- End Sidebar -->
 