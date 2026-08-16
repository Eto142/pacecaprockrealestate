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
Route::get('/real-estate-stock','App\Http\Controllers\UserController@realEstateStockPage')->name('real-estate-stock');
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




// Admin Routes
//
// Everything the administrator can reach lives under /admin and behind the
// 'admin' guard. Nothing in this group is reachable by a signed-in customer or
// by an anonymous visitor.
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

        // Users
        Route::get('/users', 'App\Http\Controllers\UserManagementController@viewUser')->name('users');
        Route::get('/users/{id}', 'App\Http\Controllers\UserManagementController@userProfile')->name('user.profile');
        Route::get('/users/{id}/delete', 'App\Http\Controllers\UserManagementController@deleteUser')->name('user.delete');

        // Funding a user account
        Route::get('/users/{id}/credit', 'App\Http\Controllers\UserManagementController@getUserProfit')->name('user.credit');
        Route::post('/users/credit', 'App\Http\Controllers\UserManagementController@addUserProfit')->name('user.credit.store');
        Route::get('/users/{id}/debit', 'App\Http\Controllers\UserManagementController@getDebitProfit')->name('user.debit');
        Route::post('/users/debit', 'App\Http\Controllers\UserManagementController@debitUserProfit')->name('user.debit.store');
        Route::get('/users/{id}/deposit', 'App\Http\Controllers\UserManagementController@getUserDeposit')->name('user.deposit');
        Route::post('/users/deposit', 'App\Http\Controllers\UserManagementController@addUserDeposit')->name('user.deposit.store');
        Route::get('/users/{id}/referral', 'App\Http\Controllers\UserManagementController@getUserReferral')->name('user.referral');
        Route::post('/users/referral', 'App\Http\Controllers\UserManagementController@addUserReferral')->name('user.referral.store');

        // Approvals
        Route::get('/deposits/{id}/approve', 'App\Http\Controllers\UserManagementController@approveDeposit')->name('deposit.approve');
        Route::get('/deposits/{id}/decline', 'App\Http\Controllers\UserManagementController@DeclineDeposit')->name('deposit.decline');
        Route::get('/withdrawals/{id}/approve', 'App\Http\Controllers\UserManagementController@approveWithdrawal')->name('withdrawal.approve');
        Route::get('/withdrawals/{id}/decline', 'App\Http\Controllers\UserManagementController@DeclineWithdrawal')->name('withdrawal.decline');
        Route::get('/kyc/{id}/approve', 'App\Http\Controllers\UserManagementController@ApproveKyc')->name('kyc.approve');
        Route::get('/kyc/{id}/decline', 'App\Http\Controllers\UserManagementController@DeclineKyc')->name('kyc.decline');

        // Reports
        Route::get('/total-deposits', 'App\Http\Controllers\UserManagementController@usersDeposit')->name('deposits');
        Route::get('/total-withdrawals', 'App\Http\Controllers\UserManagementController@usersWithdrawals')->name('withdrawals');
        Route::get('/total-profits', 'App\Http\Controllers\UserManagementController@usersProfit')->name('profits');

        // Deposit wallet settings
        Route::get('/wallet', 'App\Http\Controllers\UserManagementController@updateWallet')->name('wallet');
        Route::post('/wallet/choose', 'App\Http\Controllers\UserManagementController@chooseWallet')->name('choose-wallet');
        Route::post('/wallet/trc', 'App\Http\Controllers\UserManagementController@updateTrc')->name('update-trc');
        Route::post('/wallet/btc', 'App\Http\Controllers\UserManagementController@updateBtc')->name('update-btc');
        Route::post('/wallet/usdc', 'App\Http\Controllers\UserManagementController@updateUsdc')->name('update-usdc');
        Route::post('/wallet/eth', 'App\Http\Controllers\UserManagementController@updateEth')->name('update-eth');
        Route::post('/wallet/bank', 'App\Http\Controllers\UserManagementController@updateBank')->name('update-bank');

        // Mail
        Route::get('/mail', 'App\Http\Controllers\UserManagementController@sendTestMail')->name('mail');
        Route::get('/users/{id}/mail', 'App\Http\Controllers\UserManagementController@sendMail')->name('user.mail');
        Route::post('/mail/send', 'App\Http\Controllers\UserManagementController@sendUserEmail')->name('mail.send');

        // Countries
        Route::get('/countries', 'App\Http\Controllers\CountryController@index')->name('countries');
        Route::get('/countries/create', 'App\Http\Controllers\CountryController@create')->name('countries.create');
        Route::post('/countries', 'App\Http\Controllers\CountryController@createCountry')->name('countries.store');
        Route::get('/countries/{id}/delete', 'App\Http\Controllers\CountryController@destroy')->name('countries.delete');

        // Houses
        Route::get('/houses', 'App\Http\Controllers\HouseController@index')->name('houses');
        Route::get('/houses/create', 'App\Http\Controllers\HouseController@create')->name('houses.create');
        Route::post('/houses', 'App\Http\Controllers\HouseController@add')->name('houses.store');
        Route::get('/houses/{house_id}/edit', 'App\Http\Controllers\HouseController@editHouse')->name('houses.edit');
        Route::put('/houses/{house}', 'App\Http\Controllers\HouseController@update')->name('houses.update');
        Route::get('/houses/{house_id}/delete', 'App\Http\Controllers\HouseController@destroy')->name('houses.delete');
        Route::get('/house-images/{house_image_id}/delete', 'App\Http\Controllers\HouseController@destroyImage')->name('houses.image.delete');
    });
});