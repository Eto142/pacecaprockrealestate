<?php

namespace App\Http\Controllers;

use DB;
use Carbon\Carbon;
use App\Mail\OTPEmail;
use App\Mail\planEmail;
use App\Mail\makeDepositEmail;
use App\Mail\Plan1;
use App\Mail\Plan2;
use App\Mail\Plan3;
use App\Mail\Bond1;
use App\Mail\Bond2;
use App\Mail\Bond3;
use App\Mail\Real1;
use App\Mail\Real2;
use App\Mail\Real3;
use App\Mail\withdrawalEmail;
use App\Mail\WithdrawalSuccessful;
use App\Models\Deposit;
use App\Models\Earning;
use App\Mail\supportEmail;
use App\Models\Investment;
use App\Models\Withdrawal;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;


class UserController extends Controller
{




  public function store(Request $request)
  {
      $validator = Validator::make($request->all(), [
          'name' => 'required|string|max:255',
          'email' => 'required|string|email|max:255|unique:users',
          'password' => 'required|string|min:6|confirmed',
      ]);

      if ($validator->fails()) {
          return redirect('register')
                      ->withErrors($validator)
                      ->withInput();
      }

      $user = new User;
      $user->name = $request->name;
      $user->email = $request->email;
      $user->password = Hash::make($request->password);
      $user->save();

      //Mail::to($user->email)->send(new WelcomeMail($user));
      return redirect('dashboard.home');
  }







    public function redirect()
    {
       if (Auth::id())
       {
          if(Auth::user()->usertype=='0')
          {
            
            $data['deposit'] = Deposit::where('user_id',Auth::user()->id)->where('status', '1')->sum('amount');
            $data['withdrawal'] = Withdrawal::where('user_id',Auth::user()->id)->sum('amount');
       
          
            $data['earning'] = Earning::where('user_id',Auth::user()->id)->sum('return');
            $data['investment'] = Investment::where('user_id',Auth::user()->id)->sum('amount');
            // $data['referral'] = Refferal::where('user_id',Auth::user()->id)->sum('amount');
            $data['balance'] = $data['deposit']+$data['earning']-$data['withdrawal']-$data['investment'];
            return view('dashboard.home', $data);
          }
          else {
            $result    = DB::table('users')->where('usertype','0')->get();
            return view('admin.dashboard', compact('result'));
           
          }
       }
       else 
       {
          return redirect()->back();
       }
    }
  // go to withdrawal page
    public function withdrawalPage()
    {
       return view('dashboard.withdrawalPage');
    }
    // update withdrawal details
    public function updateWithdrawalDetails(Request $request)
    {
        // $validate->validate($request,[
        //     'subject' => 'required',
        //     'message' => 'required'
        // ]);

        
        $update = Auth::user();
        $update->btc_address=$request['btc_address'];
        $update->usdt_address=$request['usdt_address'];

        $update->update();

        return redirect('withdrawal-details')->with('status', 'Withdrawal Details Updated Successfully');  
    }
    


    //go to profile page
    public function profilePage()
    {
       return view('dashboard.profilePage');
    }

    public function updateProfile(Request $request)
    {

        
        $update = Auth::user();
        $update->name=$request['name'];
        $update->date_of_birth=$request['date_of_birth'];
        $update->phone_number=$request['phone'];
        $update->country=$request['country'];
        $update->house_address=$request['address'];
        $update->update();

        return redirect('profile')->with('status', 'Personal Details Updated Successfully');  
    }


    public function updatePassword(Request $request)
{
    $user = Auth::user();

    $validatedData = $request->validate([
        'current_password' => 'required',
        'new_password' => 'required|min:6|confirmed',
    ]);

    if (! Hash::check($validatedData['current_password'], $user->password)) {
      return redirect('password')->with('status', 'current password is incorrect');
    }

    $user->password = Hash::make($validatedData['new_password']);
    $user->save();

    return redirect('password')->with('status', 'Password updated successfully!');
}    

        //go to password page
        public function passwordPage()
        {
           return view('dashboard.passwordPage');
        }

                //go to password page
         public function notificationPage()
         {
                   return view('dashboard.notificationPage');
         }

                         //go to password page
         public function supportPage()
         {
                   return view('dashboard.supportPage');
         }

         public function investmentHistoryPage()
         {         
                   $data['investments'] =  Earning::where('user_id',Auth::user()->id)->orderBy('id','desc')->get();
                   return view('dashboard.investmentHistoryPage', $data);
         }

         public function transactionHistoryPage()
         {          
            $data['deposit'] =  Deposit::where('user_id',Auth::user()->id)->orderBy('id','desc')->get();
            $data['investments'] =  Investment::where('user_id',Auth::user()->id)->orderBy('id','desc')->get();
            $data['withdrawals'] =  Withdrawal::where('user_id',Auth::user()->id)->orderBy('id','desc')->get();
                  
            return view('dashboard.transactionHistoryPage',$data);
         }
         public function referUserPage()
         {
                   return view('dashboard.referUserPage');
         }
         public function stockPage()
         {
                   return view('dashboard.stockPage');
         }
         public function realEstatePage()
         {
                   return view('dashboard.realEstatePage');
         }
                  public function rentalPage()
         {
                   return view('dashboard.rental');
         }
         public function futureUserPage()
         {
                   return view('dashboard.futureUserPage');
         }
         public function Deposit()
         {         
          
                   return view('dashboard.deposit');
         }
         public function Withdrawal()
         {
                   return view('dashboard.withdrawal');
         }

         public function getDeposit(Request $request)
         {
            $amount = $request->input('amount');
            $data['amount']=$amount;
            $item = $request->input('item');
            $data['item']=$item;
            $data['payment'] = DB::table('users')->where('id','2')->get();
            $payment_method = $request->input('payment_method');
            
            if($item=='Bank'){
                return view('dashboard.bank',$data); 
            }


          
           return view('dashboard.payment',$data);
             
          }
    
          
          public function makeDeposit(Request $request)
          {

      
              $deposit = new Deposit;
              $deposit->user_id = Auth::user()->id;
              $deposit->amount=$request['amount'];
              $deposit->payment_method=$request['paymethd_method'];
              $deposit->status=0;
              if($request->hasFile('image')){
                  $file= $request->file('image');
          
                  $ext = $file->getClientOriginalExtension();
                  $filename = time().'.'.$ext;
                  $file->move('user/uploads/deposits',$filename);
                  $deposit->proof =  $filename;
                }

                $full_name =  Auth::user()->name;
                $email =  Auth::user()->email;
                $payment_method = $request->input('paymethd_method');
                $amount = $request->input('amount');
             

                $data=  $full_name." ".$email." just made a ".$payment_method." deposit of $".$amount."."; 
      
                $deposit->save();
                Mail::to('support@caprockrealestates.com')->send(new makeDepositEmail($data));
                return redirect('deposit')->with('status', 'Deposit Has Been Detected, Please Wait For Confirmation');  
          }




          

          public function buyPlans(Request $request)
          {
             
              $data['deposit'] = Deposit::where('user_id',Auth::user()->id)->where('status', '1')->sum('amount');
              $data['balance'] = $data['deposit'];
          
              if($data['balance']<='0') {
                  return back()->with('status', 'Your Balance Is Insufficient');  
              }

    
          
              $buy = new Investment;
              $buy->user_id = Auth::user()->id;
              $buy->email = Auth::user()->email;
              $buy->amount=$request['amount'];
              $buy->plan_name=$request['plan_name'];
              $buy->plan_percentage=$request['plan_percent'];
              $buy->plan_duration=$request['plan_duration'];
              $plan_amount = $request->input('amount');
              $plan_duration = $request->input('plan_duration');
              $plan_name = $request->input('plan_name');
              $plan_percentage = $request->input('plan_percentage');
              $plan_percent = $request->input('plan_percent');
              $buy->status='Active';
              $startDate = date('Y-m-d');
              $buy->plan_start=  $startDate;
             
    
               if($plan_duration == '1 month' ) {
             
              $endDate = date('Y-m-d', strtotime( $startDate.'+ 1 month'));
                   }
               if($plan_duration == '3 months' ) {
                $endDate = date('Y-m-d', strtotime( $startDate.'+ 3 months'));
                   }
               if($plan_duration == '6 months' ) {
              
                $endDate = date('Y-m-d', strtotime( $startDate.'+ 6 months'));
                   }
               if($plan_duration == '9 months' ) 
               {
                $endDate = date('Y-m-d', strtotime( $startDate.'+ 9 months'));
                   }
               if($plan_duration == '1 year' ) {
                $endDate = date('Y-m-d', strtotime( $startDate.'+ 12 months'));
                   }
               if($plan_duration == '2 years' ) 
               {
                $endDate = date('Y-m-d', strtotime( $startDate.'+ 24 months'));
               }
               if($plan_duration == '5 years' ) 
               {
                $endDate = date('Y-m-d', strtotime( $startDate.'+ 60 months'));
               }
                if($plan_duration == '10 years' ) 
               {
                $endDate = date('Y-m-d', strtotime( $startDate.'+ 120 months'));
               }
               if($plan_duration == '20 years' ) 
               {
                $endDate = date('Y-m-d', strtotime( $startDate.'+ 240 months'));
               }
               if($plan_duration == 'lifetime' ) 
               {
                $endDate = 'lifetime';
               }
                if($plan_duration == 'none' ) 
                {
                    return back()->with('status', 'Please choose a plan duration'); 
                }

              
              $buy->plan_end= $endDate;

              $data= "You have successfully purchased contract ".$plan_name." $".$plan_amount." @ ".$plan_percentage." interest daily 
             with an estimate daily interest of ".$plan_percentage." starting from ".$startDate." to ".$endDate . ".";
          
                $buy->save();

              $email = Auth::user()->email;
              
              if($plan_name == 'SD STOCKS - CUXX1' ) 
              {
                 Mail::to($email)->send(new Plan1($data));
              }
              if($plan_name == 'SD STOCKS - CUXX2' ) 
              {
                 Mail::to($email)->send(new Plan2($data));
              }
              if($plan_name == 'SD STOCKS - CUXX3' ) 
              {
                 Mail::to($email)->send(new Plan3($data));
              }
              if($plan_name == 'CC01' ) 
              {
                 Mail::to($email)->send(new Bond1($data));
              }
              if($plan_name == 'CC02' ) 
              {
                 Mail::to($email)->send(new Bond2($data));
              }
              if($plan_name == 'CC03' ) 
              {
                 Mail::to($email)->send(new Bond3($data));
              }
              if($plan_name == 'REIT - I' ) 
              {
                 Mail::to($email)->send(new Real1($data));
              }
              if($plan_name == 'REIT - II' ) 
              {
                 Mail::to($email)->send(new Real2($data));
              }
              if($plan_name == 'REIT - III' ) 
              {
                 Mail::to($email)->send(new Real3($data));
              }
              Mail::to('support@caprockrealestates.com')->send(new planEmail($data));
              return back()->with('status', 'Plan Has Been Purchased Successfully'); 

          }



          public function supportEmail(Request $request)
          
          {
              
            $data = [
              'name' =>$request->name,
              'email' =>$request->email, 
              'message' =>$request->message,
            ];


            

            Mail::to('support@caprockrealestates.com')->send(new supportEmail($data));
      
            return back()->with('status','Email Successfully sent');
      
          }




          public function generateOTP()
{


    // Generate a random 6-digit OTP code
    $otpCode = rand(100000, 999999);

    // Set the OTP code and its expiration time in the database
    $email = Auth::user()->email; 
    $user = Auth::user();  
    $user->otp_code = $otpCode;
    $user->otp_expiry = now()->addMinutes(5); // expires in 5 minutes
    $user->save();

    // Send the OTP code to the user's email
    Mail::to($email)->send(new OTPEmail($otpCode));

    return redirect('withdrawal')->with('status', 'Action Successful! OTP have been sent to your email
    ');
}




          public function makeWithdrawal(Request $request)
{

    $otp= Auth::user();
    $otp->otp_code=$request['otpcode'];
    $method = $request->input('method');
    $data['method']=$method;
    $data['deposit'] = Deposit::where('user_id',Auth::user()->id)->where('status', '1')->sum('amount');
    $data['withdrawal'] = Withdrawal::where('user_id',Auth::user()->id)->sum('amount');
    $data['balance'] = $data['deposit']-$data['withdrawal'];
    $otp_code = $request->input('otpcode');

    if($data['balance']<='0') 
    {
        return redirect('withdrawal')->with('status', 'Your Balance Is Insufficient');  
    }

    if(Auth::user()->otp_code !=  $otp_code) 
    {
      return redirect('withdrawal')->with('status', 'otp code is incorrect');  
    }


    $with = new Withdrawal;
    $with->user_id = Auth::user()->id;
    $with->amount=$request['amount'];
    $with->payment_method=$request['method'];
    $with->status=0;

    $full_name =  Auth::user()->name;
    $withdrawal_type = $request->input('method');
    $amount =  $request->input('amount');
    $btc_address =   Auth::user()->btc_address;
    $usdt_address =   Auth::user()->usdt_address;

    if( $method == "Bitcoin") 
    {
      $data=  $full_name." has just requested for a ".$withdrawal_type." of  $".$amount." , with the wallet address ".$btc_address."."; 
      $withdrawal=  "You've successfully withdrawn a ".$withdrawal_type." of $".$amount." with the wallet address ".$btc_address."."; 
    }

    if( $method == "Usdt(Trc20)") 
    {
      $data=  $full_name."has just requested for a ".$withdrawal_type." of  $".$amount." , with the wallet address ".$usdt_address."."; 
      $withdrawal=  "You've successfully withdrawn a ".$withdrawal_type." of $".$amount." with the wallet address ".$usdt_address."."; 
    }

   

   

    $with->save();
    $email = Auth::user()->email;   

    // Send email to user after subscribing to an investment plan
    Mail::to($email)->send(new WithdrawalSuccessful($withdrawal));
    Mail::to('support@caprockrealestates.com')->send(new withdrawalEmail($data)); 
    return redirect('withdrawal')->with('status', 'Withdrawal Successful, Please contact our live support for more information'); 
   
 


}




   //logout function
    public function perform()
   {
    Session::flush();
    Auth::guard('web')->logout();
    return redirect('/login');
   }


}
