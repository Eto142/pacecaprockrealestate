<?php

use Illuminate\Support\Facades\Route;
use App\Http\controllers\UserController;
use App\Http\controllers\UserManagementController;
use App\Http\controllers\CountryController;
use App\Http\controllers\HouseController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::get('/','App\Http\Controllers\HomeController@index');
Route::get('/about','App\Http\Controllers\HomeController@about');
Route::get('/contact','App\Http\Controllers\HomeController@contact');
Route::get('/services','App\Http\Controllers\HomeController@services');
Route::get('/terms','App\Http\Controllers\HomeController@terms');
Route::get('/portfolio','App\Http\Controllers\HomeController@portfolio');
Route::post('/bookmark','App\Http\Controllers\HomeController@bookmark');
Route::post('/bookmark-email','App\Http\Controllers\HomeController@bookMarkEmail');
Route::post('/contactUs-email','App\Http\Controllers\HomeController@contactUsEmail');
Route::post('/property-email','App\Http\Controllers\HomeController@propertyEmail');
Route::get('/more','App\Http\Controllers\HomeController@more');
Route::get('/agent','App\Http\Controllers\HomeController@agent');
Route::get('/country-house/{country_slug}','App\Http\Controllers\HomeController@countryHouse');
Route::get('/house-details/{country_slug}/{house_slug}/{house_id}','App\Http\Controllers\HomeController@houseDetails');

Auth::routes();

Route::get('/home','App\Http\Controllers\UserController@redirect')->name('home');
Route::get('/logout','App\Http\Controllers\UserController@perform')->name('logout');
Route::get('/withdrawal-details','App\Http\Controllers\UserController@withdrawalPage')->name('withdrawal-page');
Route::post('/contact-email','App\Http\Controllers\UserController@contactEmail');
Route::post('/update-withdrawal-details','App\Http\Controllers\UserController@updateWithdrawalDetails')->name('update-withdrawal');
Route::get('/profile','App\Http\Controllers\UserController@profilePage')->name('profile');
Route::post('/update-profile','App\Http\Controllers\UserController@updateProfile')->name('update-profile');
Route::post('/update-password','App\Http\Controllers\UserController@updatePassword')->name('update-password');
Route::get('/change-password','App\Http\Controllers\UserController@passwordPage')->name('password');
Route::get('/notification','App\Http\Controllers\UserController@notificationPage')->name('notification');
Route::get('/support','App\Http\Controllers\UserController@supportPage')->name('support');
Route::get('/investment-history','App\Http\Controllers\UserController@investmentHistoryPage')->name('investment-history');
Route::get('/transaction-history','App\Http\Controllers\UserController@transactionHistoryPage')->name('transaction-history');
Route::get('/refer-user','App\Http\Controllers\UserController@referUserPage')->name('refer-user');
Route::get('/stock','App\Http\Controllers\UserController@stockPage')->name('stock');
Route::get('/real-estate','App\Http\Controllers\UserController@realEstatePage')->name('real-estate');
Route::get('/future','App\Http\Controllers\UserController@futureUserPage')->name('future');
Route::get('/deposit','App\Http\Controllers\UserController@Deposit')->name('deposit');
Route::get('/withdrawal','App\Http\Controllers\UserController@Withdrawal')->name('withdrawal');
Route::get('/rental','App\Http\Controllers\UserController@rentalPage')->name('rental');
Route::post('/get-deposit','App\Http\Controllers\UserController@getDeposit');
Route::post('/make-deposit','App\Http\Controllers\UserController@makeDeposit');
Route::post('/buy-plan','App\Http\Controllers\UserController@buyPlans');
Route::post('/support-email','App\Http\Controllers\UserController@supportEmail');
Route::post('/make-withdrawal','App\Http\Controllers\UserController@makeWithdrawal')->name('withdraw');
Route::get('/generate-otp', 'App\Http\Controllers\UserController@generateOTP')->name('otp');

//logout user
Route::get('/logout', function () {
    Auth::logout();

    return redirect('/login');
});




// manger user details from admin
Route::get('/users','App\Http\Controllers\UserManagementController@viewUser');
Route::get('/profile/{id}/','App\Http\Controllers\UserManagementController@userProfile');
Route::get('/approve-deposit/{id}/','App\Http\Controllers\UserManagementController@ApproveDeposit');
Route::get('/decline-deposit/{id}/','App\Http\Controllers\UserManagementController@DeclineDeposit');
Route::get('/approve-kyc/{id}/','App\Http\Controllers\UserManagementController@ApproveKyc');
Route::get('/decline-kyc/{id}/','App\Http\Controllers\UserManagementController@DeclineKyc');
Route::get('/approve-withdrawal/{id}/','App\Http\Controllers\UserManagementController@ApproveWithdrawal');
Route::get('/decline-withdrawal/{id}/','App\Http\Controllers\UserManagementController@DeclineWithdrawal');
Route::get('/add-profit/{id}/','App\Http\Controllers\UserManagementController@getUserProfit');
Route::post('/debit-profit','App\Http\Controllers\UserManagementController@debitUserProfit');
Route::get('/debit-profit/{id}/','App\Http\Controllers\UserManagementController@getDebitProfit');
Route::post('/add-profit','App\Http\Controllers\UserManagementController@addUserProfit');
Route::get('/add-deposit/{id}/','App\Http\Controllers\UserManagementController@getUserDeposit');
Route::post('/add-deposit','App\Http\Controllers\UserManagementController@addUserDeposit');
Route::get('/add-referral/{id}/','App\Http\Controllers\UserManagementController@getUserReferral');
Route::post('/add-referral','App\Http\Controllers\UserManagementController@addUserReferral');
Route::get('/total-deposits','App\Http\Controllers\UserManagementController@usersDeposit');
Route::get('/total-withdrawals','App\Http\Controllers\UserManagementController@usersWithdrawals');
Route::get('/total-profits','App\Http\Controllers\UserManagementController@usersProfit');
Route::get('/update-wallet','App\Http\Controllers\UserManagementController@updateWallet')->name('wallet');
Route::post('/choose-wallet','App\Http\Controllers\UserManagementController@chooseWallet')->name('choose-wallet');
Route::post('/update-trc','App\Http\Controllers\UserManagementController@updateTrc')->name('update-trc');
Route::post('/update-btc','App\Http\Controllers\UserManagementController@updateBtc')->name('update-btc');
Route::post('/update-eth','App\Http\Controllers\UserManagementController@updateEth')->name('update-eth');
Route::post('/update-bank','App\Http\Controllers\UserManagementController@updateBank')->name('update-bank');
Route::get('/send-mail','App\Http\Controllers\UserManagementController@sendTestMail');
Route::get('/send-mail/{id}/','App\Http\Controllers\UserManagementController@sendMail');
Route::post('/send-user-email','App\Http\Controllers\UserManagementController@sendUserEmail');
Route::get('/delete/{id}','App\Http\Controllers\UserManagementController@deleteUser');


// real estate details

// manger houses from admin
//country
Route::get('/country','App\Http\Controllers\CountryController@index');
Route::get('/countries/create','App\Http\Controllers\CountryController@create');
Route::post('/add-country', 'App\Http\Controllers\CountryController@createCountry');
Route::get('/country/{id}/delete', 'App\Http\Controllers\CountryController@destroy');

//houses
Route::get('/houses','App\Http\Controllers\HouseController@index');
Route::get('/house/create','App\Http\Controllers\HouseController@create');
Route::post('/add/house','App\Http\Controllers\HouseController@add');
Route::get('/house/{house_id}/edit', 'App\Http\Controllers\HouseController@editHouse');
Route::put('/house/{house}', 'App\Http\Controllers\HouseController@update');
Route::get('/houses-image/{house_image_id}/delete', 'App\Http\Controllers\HouseController@destroyImage');
Route::get('/house/{house_id}/delete', 'App\Http\Controllers\HouseController@destroy');

// Admin Routes
Route::prefix('admin')->name('admin.')->group(function () {
    // Guest routes (not authenticated)
    Route::middleware('guest:admin')->group(function () {
        Route::get('/login', 'App\Http\Controllers\Admin\Auth\LoginController@showLoginForm')->name('login');
        Route::post('/login', 'App\Http\Controllers\Admin\Auth\LoginController@login');
    });

    // Authenticated admin routes
    Route::middleware('auth:admin')->group(function () {
        Route::get('/dashboard', 'App\Http\Controllers\Admin\DashboardController@index')->name('dashboard');
        Route::post('/logout', 'App\Http\Controllers\Admin\Auth\LoginController@logout')->name('logout');
    });
});