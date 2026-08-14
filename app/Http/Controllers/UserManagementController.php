<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use App\Mail\depositEmail;
use App\Mail\sendUserEmail;
use App\Models\Deposit;
use App\Models\Withdrawal;
use App\Models\Earning;
use App\Models\User;
use App\Models\Refferal;
use App\Models\Profit;
use App\Models\Debitprofit;
use App\Models\Bank;
use App\Models\Admin;
use DB;
use Session;

use Illuminate\Http\Request;

class UserManagementController extends Controller
{   



    public function viewUser(){

        if(Auth::user()->usertype=='1')
        {
            $result      = DB::table('users')->where('usertype','0')->get();
            return view('admin.users',compact('result'));
        }
        else
        {
            return redirect()->route('home');
        }


    }

    public function usersDeposit(){

        
            // $profile = Session::get('user_id');
            // // $employees = DB::table('profile_information')->where('user_id',$profile)->first();
            // $result      = DB::table('users')->get();
            $user      = DB::table('users')->get();
            $deposit      = DB::table('deposits')->get();
            $totalDeposit      = DB::table('deposits')->count();
            $activeDeposit      = DB::table('deposits')->where('status','1')->sum('amount');
            $inactiveDeposit      = DB::table('deposits')->where('status','0')->sum('amount');
            return view('admin.users_deposits',compact('deposit','user','totalDeposit','activeDeposit','inactiveDeposit'));
    
          }

          public function usersWithdrawals(){

            $user      = DB::table('users')->get();
            $withdrawal      = DB::table('withdrawals')->get();
            $totalWithdrawal      = DB::table('withdrawals')->count();
            $activeWithdrawal      = DB::table('withdrawals')->where('status','1')->sum('amount');
            $inactiveWithdrawal      = DB::table('withdrawals')->where('status','0')->sum('amount');
            return view('admin.users_withdrawals',compact('withdrawal','user','totalWithdrawal','activeWithdrawal','inactiveWithdrawal'));
    
          }

          public function usersProfit(){

            $user      = DB::table('users')->get();
            $profit      = DB::table('earnings')->get();
            return view('admin.users_profits',compact('profit','user'));
    
          }

    public function userProfile($id)
    {   
           
            $userProfiles      = User::findOrFail($id);
            $userProfile      = DB::table('users')->where('id',$id)->first();
            $userDeposit      = DB::table('deposits')->where('user_id',$id)->orderBy('id','desc')->get();
            $userWithdrawal    = DB::table('withdrawals')->where('user_id',$id)->orderBy('id','desc')->get();
            $userInvestment    = DB::table('investments')->where('user_id',$id)->orderBy('id','desc')->get();
            

            // sum transactions
              $totalDeposit      = DB::table('deposits')->where('user_id',$id)->where('status', '1')->sum('amount');
              $totalEarning      = DB::table('earnings')->where('user_id',$id)->sum('return');
              $totalInvestment      = DB::table('investments')->where('user_id',$id)->sum('amount');
              $totalWithdrawal      = DB::table('withdrawals')->where('user_id',$id)->sum('amount');
              $totalProfit =  $totalDeposit +$totalEarning  - $totalWithdrawal- $totalInvestment;

            

            
            
            return view('admin.user',compact('userProfile', 'userDeposit','totalProfit','userWithdrawal','userInvestment','userProfiles'));
     
    }

    public function approveDeposit(Request $request, $id){

        $email = $request->input('email');
        $data = [
          'amount' =>$request->amount,
        ];
        $deposit = array();
        $deposit['status'] = $request->status;
        $update = DB::table('deposits')->where('id',$id)->update($deposit);
        Mail::to($email)->cc('support@caprockrealestates.com')->bcc('support@caprockrealestates.com')->send(new depositEmail($data));
        return redirect()->back()->with('message', 'Deposit Has Been Approved Successfully');
    }

    public function DeclineDeposit(Request $request, $id){

        $deposit = array();
        $deposit['status'] = $request->status;
        $update = DB::table('deposits')->where('id',$id)->update($deposit);
        return redirect()->back()->with('message', 'Deposit Declined');
    }
    public function ApproveKyc(Request $request, $id){
        $deposit = array();
        $deposit['status'] = $request->status;
        $update = DB::table('kycs')->where('id',$id)->update($deposit);
        return redirect()->back()->with('message', 'Documents Has Been Approved Successfully');
    }

    public function DeclineKyc(Request $request, $id){
        $deposit = array();
        $deposit['status'] = $request->status;
        $update = DB::table('kycs')->where('id',$id)->update($deposit);
        return redirect()->back()->with('message', 'Documents Declined');
    }
    public function approveWithdrawal(Request $request, $id){
        $withdrawal = array();
        $withdrawal['status'] = $request->status;
        $update = DB::table('withdrawals')->where('id',$id)->update($withdrawal);
        return redirect()->back()->with('message', 'Withdrawal Has Been Approved Successfully');
    }

    public function DeclineWithdrawal(Request $request, $id){
        $withdrawal = array();
        $withdrawal['status'] = $request->status;
        $update = DB::table('withdrawals')->where('id',$id)->update($withdrawal);
        return redirect()->back()->with('message', 'Withdrawal Declined');
    }


    public function getUserProfit($id)
    {   
   

    
            
            $userProfile   = DB::table('users')->where('id',$id)->first();
            
            return view('admin.add_profit',compact('userProfile'));
     
    }

    public function addUserProfit(Request $request)
    {
        // $validate->validate($request,[
        //     'subject' => 'required',
        //     'message' => 'required'
        // ]);

        $topUp = new Profit;
        $topUp->user_id = $request['user_id'];
        $topUp->plan_name=$request['plan_name'];
        $topUp->amount=$request['amount'];
        $topUp->plan_type=$request['plan_type'];

          $topUp->save();
          return redirect()->back()->with('message', 'User Profit Topped Up Successfully');  
    }


    public function getDebitProfit($id)
    {   
   

    
            
            $userProfile   = DB::table('users')->where('id',$id)->first();
            
            return view('admin.debit_profit',compact('userProfile'));
     
    }

    public function debitUserProfit(Request $request)
    {
        // $validate->validate($request,[
        //     'subject' => 'required',
        //     'message' => 'required'
        // ]);

        $topUp = new Debitprofit;
        $topUp->user_id = $request['user_id'];
        $topUp->amount=$request['amount'];

          $topUp->save();
          return redirect()->back()->with('message', 'User Profit Debited Successfully');  
    }

    public function getUserDeposit($id)
    {   
   

    
            
            $userProfile   = DB::table('users')->where('id',$id)->first();
            
            return view('admin.add_deposit',compact('userProfile'));
     
    }


    public function addUserDeposit(Request $request)
    {
        // $validate->validate($request,[
        //     'subject' => 'required',
        //     'message' => 'required'
        // ]);

        $topUp = new Deposit;
        $topUp->user_id = $request['user_id'];
        $topUp->payment_method = $request['payment_method'];
        $topUp->amount=$request['amount'];
        $topUp->status=1;
        $topUp->created_at=$request['deposit_date'];

          $topUp->save();
          return redirect()->back()->with('message', 'User Deposit Added Successfully');  
    }

    public function getUserReferral($id)
    {   
   

    
            
            $userProfile   = DB::table('users')->where('id',$id)->first();
            
            return view('admin.add_referral',compact('userProfile'));
     
    }

    public function addUserReferral(Request $request)
    {
        // $validate->validate($request,[
        //     'subject' => 'required',
        //     'message' => 'required'
        // ]);

        $topUp = new Refferal;
        $topUp->user_id = $request['user_id'];
        $topUp->amount=$request['amount'];

          $topUp->save();
          return redirect()->back()->with('message', 'User Referral Bonus Added Successfully');  
    }










    public function updateWallet()
    {
       return view('admin.updateWallet');
    }


    public function chooseWallet(Request $request) 
    {
        $method = $request->input('method');

        if($method=='bitcoin') {

            return view('admin.bitcoin');
        }
        elseif($method=='eth') {

            return view('admin.eth');
        }
        elseif($method=='trc') {

            return view('admin.trc');
        }
        elseif($method=='bank') {

            $data['page_title'] = 'Edit Bank Details';
            return view('admin.bank',$data);
        }
        else{
            return back()->with('status','You have not chose a wallet');
        }

    }
    

    public function updateTrc(Request $request)
    {


        $update = Auth::user();
        $update->usdt_address=$request['usdt_address'];
        if($request->hasFile('image')){
            $file= $request->file('image');
    
            $ext = $file->getClientOriginalExtension();
            $filename = time().'.'.$ext;
            $file->move('admin/uploads/admin',$filename);
            $update->trcImage =  $filename;
          }

          $update->save();
          return redirect('update-wallet')->with('status', 'Trc Details Updated Successfully');  
    }

    public function updateBtc(Request $request)
    {


        $update = Auth::user();
        $update->btc_address=$request['btc_address'];
        if($request->hasFile('image')){
            $file= $request->file('image');
    
            $ext = $file->getClientOriginalExtension();
            $filename = time().'.'.$ext;
            $file->move('admin/uploads/admin',$filename);
            $update->btcImage =  $filename;
          }

          $update->save();
          return redirect('update-wallet')->with('status', 'Btc Details Updated Successfully');  
    }

    public function updateBank(Request $request)
    {

        $update = Auth::user();
        $update['bank_name'] = $request->bank_name;
        $update['account_name'] = $request->account_name;
        $update['account_no'] = $request->account_no;
        $update['routing_no'] = $request->routing_no;
        $update['bank_address'] = $request->bank_address;
        $update['home_address'] = $request->home_address;
        $update->update();

        
        return redirect('update-wallet')->with('status', 'Bank Details Updated Successfully');  
    }


    public function sendMail($id)
    {   
           

            
            $userProfiles      = User::findOrFail($id);
            $userProfile  = DB::table('users')->where('id',$id)->first();

            return view('admin.send_mail',compact('userProfile','userProfiles'));

            
     
    }

    
    public function sendTestMail()
    {   
    
    return view('admin.send_test_mail');        
     
    }


    public function sendUserEmail(Request $request)
          
    {
      
        $email = $request->input('email');
        //$subject = $request->input('subject');
         $data = [
        'message' =>$request->message,
            ];


      

      Mail::to($email)->send(new sendUserEmail($data));

      return back()->with('status','Email Successfully sent');

    }

    public function deleteUser($id)
    {
  
        $user  = User::findOrFail($id);
        $user->delete();
        return back()->with('message', 'User deleted Successfully');  
    }

 

    





}
