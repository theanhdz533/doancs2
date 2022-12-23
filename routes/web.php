<?php

use App\Http\Controllers\Admin\Accept;
use App\Http\Controllers\Admin\BannerController;
use App\Http\Controllers\Admin\CustomerController;
use App\Http\Controllers\Admin\hidden;
use App\Http\Controllers\Admin\ManagerController;
use App\Http\Controllers\Admin\PostController;
use App\Http\Controllers\Home\accpet;
use App\Http\Controllers\Home\BillController;
use App\Http\Controllers\Home\CartController;
use App\Http\Controllers\Home\ContactController;
use App\Http\Controllers\Home\hidden as HomeHidden;
use App\Http\Controllers\Home\HomeController;
use App\Http\Controllers\Home\PostController as HomePostController;
use App\Http\Controllers\Home\ProductController;
use App\Http\Controllers\Home\ProfileController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\MailController;
use App\Models\post;
use Illuminate\Routing\RouteAction;
use Illuminate\Support\Facades\Route;

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

/*===============================================================================================*/
/*-------------------------------------------CLIENT----------------------------------------------*/
Route::resource('/',HomeController::class);
Route::resource('/contact', ContactController::class);
Route::get('/reportMail',[ContactController::class,'reportMail'])->name('reportMail');
Route::resource('/HomeProduct',
         ProductController::class
);
Route::post('/rate',[ProductController::class,'rate'])->name('rate');

Route::resource('/HomeProfile',
         ProfileController::class
);
Route::resource('/HomePost',
        HomePostController::class
);
Route::resource('/HomeCart',
        CartController::class
);
Route::resource('/MyBill',
        BillController::class
);
Route::post('/unOrder',[BillController::class,'unOrder'])->name('unOrder');
Route::resource('/confirm',
        accpet::class
);
Route::post('/address',[accpet::class,'address'])->name('address');
Route::resource('/cancel',
        HomeHidden::class
);

Route::post('/enter_reason',[HomeHidden::class,'enter_reason'])->name('enter_reason');
Route::post('/sendReason',[HomeHidden::class,'sendReason'])->name('sendReason');

/*===============================================================================================*/

/*-------------------------------------------LOGIN----------------------------------------------*/

Route::get('register', [LoginController::class, 'register'])->name('register');
Route::post('register', [LoginController::class, 'register_action'])->name('register.action');
Route::post('otp', [LoginController::class, 'otp'])->name('otp');
Route::post('otp_resend', [LoginController::class, 'otp_resend'])->name('otp_resend');
Route::get('login', [LoginController::class, 'login'])->name('login');
Route::post('login', [LoginController::class, 'login_action'])->name('login.action');
Route::get('password', [LoginController::class, 'password'])->name('password');
Route::post('password', [LoginController::class, 'password_action'])->name('password.action');
Route::get('forgotPassword', [LoginController::class, 'forgotPassword'])->name('forgotPassword');
Route::post('forgotPassword', [LoginController::class, 'forgotPassword_action'])->name('forgotPassword.action');
Route::get('logout', [LoginController::class, 'logout'])->name('logout');
// ------------------Mail ---------------------------------------
// Route::get('send-mail', [MailController::class, 'index']);
// Route::get('otp', [MailController::class, 'otp']);
// Route::get('finish', [MailController::class, 'finish'])->name('finish');
/*===============================================================================================*/

/*===============================================================================================*/

/*-------------------------------------------ADMIN----------------------------------------------*/
Route::resource('/manager',ManagerController::class);
Route::resource('/customer',
        CustomerController::class 
);

Route::resource('/post',
         PostController::class
);

Route::resource('/accept',
         Accept::class
);
Route::resource('/hidden',
         hidden::class
);
Route::resource('/banner',
         BannerController::class
);




/*===============================================================================================*/