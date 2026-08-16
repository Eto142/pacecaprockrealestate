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
use App\Models\Debitprofit;
use App\Models\Bank;
use App\Models\Admin;
use DB;
use Session;

use Illuminate\Http\Request;

class UserManagementController extends Controller
{   



    /**
     * The public deposit page reads the site's wallet addresses from the
     * administrator's user row, so that is the row the wallet screens write to.
     */
    private function depositWalletOwner()
    {
        return User::where('usertype', '1')->orderBy('id')->firstOrFail();
    }

    public function viewUser(){

        // Access is enforced by the 'auth:admin' middleware on the route group,
        // so there is no need to inspect the web guard here.
        $result = DB::table('users')->where('usertype','0')->get();

        return view('admin.users',compact('result'));
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
              $totalDebit        = DB::table('debitprofits')->where('user_id',$id)->sum('amount');
              $totalProfit =  $totalDeposit +$totalEarning  - $totalWithdrawal- $totalInvestment - $totalDebit;

            

            
            
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
        Mail::to($email)->cc('support@pacepacecaprockrealestates.com')->bcc('support@pacepacecaprockrealestates.com')->send(new depositEmail($data));
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
        $data = $request->validate([
            'user_id' => 'required|exists:users,id',
            'amount' => 'required|numeric|min:0.01',
            'plan_name' => 'required|string|max:255',
        ]);

        // Credits land in `earnings`, which is the table the balance is
        // calculated from, so the money shows up on the user's account.
        Earning::create([
            'user_id' => $data['user_id'],
            'capital' => 0,
            'return' => $data['amount'],
            'description' => $data['plan_name'],
        ]);

        return redirect()->route('admin.user.profile', $data['user_id'])
            ->with('message', 'User account credited with $'.number_format($data['amount'], 2));
    }


    public function getDebitProfit($id)
    {   
   

    
            
            $userProfile   = DB::table('users')->where('id',$id)->first();
            
            return view('admin.debit_profit',compact('userProfile'));
     
    }

    public function debitUserProfit(Request $request)
    {
        $data = $request->validate([
            'user_id' => 'required|exists:users,id',
            'amount' => 'required|numeric|min:0.01',
        ]);

        Debitprofit::create([
            'user_id' => $data['user_id'],
            'amount' => $data['amount'],
        ]);

        return redirect()->route('admin.user.profile', $data['user_id'])
            ->with('message', 'User account debited by $'.number_format($data['amount'], 2));
    }

    public function getUserDeposit($id)
    {   
   

    
            
            $userProfile   = DB::table('users')->where('id',$id)->first();
            
            return view('admin.add_deposit',compact('userProfile'));
     
    }


    public function addUserDeposit(Request $request)
    {
        $data = $request->validate([
            'user_id' => 'required|exists:users,id',
            'payment_method' => 'required|string|max:255',
            'amount' => 'required|numeric|min:0.01',
            'deposit_date' => 'nullable|date',
        ]);

        $deposit = new Deposit;
        $deposit->user_id = $data['user_id'];
        $deposit->payment_method = $data['payment_method'];
        $deposit->amount = $data['amount'];
        $deposit->proof = 'added-by-admin';
        $deposit->status = 1;
        $deposit->created_at = $data['deposit_date'] ?? now();
        $deposit->updated_at = now();
        $deposit->save();

        return redirect()->route('admin.user.profile', $data['user_id'])
            ->with('message', 'Approved deposit of $'.number_format($data['amount'], 2).' added');
    }

    public function getUserReferral($id)
    {   
   

    
            
            $userProfile   = DB::table('users')->where('id',$id)->first();
            
            return view('admin.add_referral',compact('userProfile'));
     
    }

    public function addUserReferral(Request $request)
    {
        $data = $request->validate([
            'user_id' => 'required|exists:users,id',
            'amount' => 'required|numeric|min:0.01',
        ]);

        Earning::create([
            'user_id' => $data['user_id'],
            'capital' => 0,
            'return' => $data['amount'],
            'description' => 'Referral Bonus',
        ]);

        return redirect()->route('admin.user.profile', $data['user_id'])
            ->with('message', 'Referral bonus of $'.number_format($data['amount'], 2).' added');
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
        elseif($method=='usdc') {

            return view('admin.usdc');
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


        $update = $this->depositWalletOwner();
        $update->usdt_address=$request['usdt_address'];
        if($request->hasFile('image')){
            $file= $request->file('image');
    
            $ext = $file->getClientOriginalExtension();
            $filename = time().'.'.$ext;
            $file->move('admin/uploads/admin',$filename);
            $update->trcImage =  $filename;
          }

          $update->save();
          return redirect()->route('admin.wallet')->with('status', 'Trc Details Updated Successfully');  
    }

    public function updateBtc(Request $request)
    {


        $update = $this->depositWalletOwner();
        $update->btc_address=$request['btc_address'];
        if($request->hasFile('image')){
            $file= $request->file('image');
    
            $ext = $file->getClientOriginalExtension();
            $filename = time().'.'.$ext;
            $file->move('admin/uploads/admin',$filename);
            $update->btcImage =  $filename;
          }

          $update->save();
          return redirect()->route('admin.wallet')->with('status', 'Btc Details Updated Successfully');  
    }

    public function updateEth(Request $request)
    {


        $update = $this->depositWalletOwner();
        $update->eth_address=$request['eth_address'];
        if($request->hasFile('image')){
            $file= $request->file('image');

            $ext = $file->getClientOriginalExtension();
            $filename = time().'.'.$ext;
            $file->move('admin/uploads/admin',$filename);
            $update->ethImage =  $filename;
          }

          $update->save();
          return redirect()->route('admin.wallet')->with('status', 'Eth Details Updated Successfully');
    }

    public function updateUsdc(Request $request)
    {


        $update = $this->depositWalletOwner();
        $update->usdc_address=$request['usdc_address'];
        if($request->hasFile('image')){
            $file= $request->file('image');

            $ext = $file->getClientOriginalExtension();
            $filename = time().'.'.$ext;
            $file->move('admin/uploads/admin',$filename);
            $update->usdcImage =  $filename;
          }

          $update->save();
          return redirect()->route('admin.wallet')->with('status', 'USDC Details Updated Successfully');
    }

    public function updateBank(Request $request)
    {

        $update = $this->depositWalletOwner();
        $update['bank_name'] = $request->bank_name;
        $update['account_name'] = $request->account_name;
        $update['account_no'] = $request->account_no;
        $update['routing_no'] = $request->routing_no;
        $update['bank_address'] = $request->bank_address;
        $update['home_address'] = $request->home_address;
        $update->update();

        
        return redirect()->route('admin.wallet')->with('status', 'Bank Details Updated Successfully');  
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
