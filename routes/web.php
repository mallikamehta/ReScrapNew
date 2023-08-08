<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ReScrapController;
use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\ProductController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

/*Route::get('/', function () {
    return view('welcome');
});*/

Route::get('/', [ReScrapController::class, 'index']);

//Pages Route

Route::get('/contact', [ReScrapController::class, 'contact'])->name('contact');
Route::get('/team', [ReScrapController::class, 'team'])->name('team');
Route::get('/feedback', [ReScrapController::class, 'feedback'])->name('feedback');
Route::get('/charity', [ReScrapController::class, 'charity'])->name('charity');
Route::get('/zerowaste', [ReScrapController::class, 'zerowaste'])->name('zerowaste');
Route::get('/about', [ReScrapController::class, 'about'])->name('about');
Route::get('/privacypolicy', [ReScrapController::class, 'privacypolicy'])->name('privacypolicy');
Route::get('/termcondition', [ReScrapController::class, 'termcondition'])->name('termcondition');
Route::get('/support', [ReScrapController::class, 'support'])->name('support');
Route::get('/donotrecycle', [ReScrapController::class, 'donotrecycle'])->name('donotrecycle');
Route::get('/pickup', [ReScrapController::class, 'pickup'])->name('pickup');
Route::get('/donotrecycling', [ReScrapController::class, 'donotrecycling'])->name('donotrecycling');
Route::get('/sell', [ReScrapController::class, 'sell'])->name('sell');
Route::get('/paper', [ReScrapController::class, 'paper'])->name('paper');
Route::get('/plastic', [ReScrapController::class, 'plastic'])->name('plastic');
Route::get('/iron', [ReScrapController::class, 'iron'])->name('iron');
Route::get('/copper', [ReScrapController::class, 'paper'])->name('copper');
Route::get('/electronic', [ReScrapController::class, 'electronic'])->name('electronic');
Route::get('/metal', [ReScrapController::class, 'metal'])->name('metal');
Route::get('/glass', [ReScrapController::class, 'glass'])->name('glass');






//for Save data

Route::post('save-pickup', [ReScrapController::class, 'savePickup']);







// Route::get('/', [CarServController::class, 'index']);
// Route::get('booking', [CarServController::class, 'booking']);
// Route::post('save-booking', [CarServController::class, 'saveBooking']);

Route::get('login', [AuthController::class, 'login'])->name('login');
Route::get('register', [AuthController::class, 'register']);
Route::post('save-user', [AuthController::class, 'saveUser']);

Route::post('login-post', [AuthController::class, 'postLogin'])->name('login.post');

Route::get('myprofile', [AuthController::class, 'myprofile'])->middleware(['auth','is_active_check']);
Route::get('edit-profile', [AuthController::class, 'editProfile'])->name('edit-profile');
Route::post('update-user', [AuthController::class, 'updateUser'])->name('update-user');
Route::get('change-password', [AuthController::class, 'changePassword'])->name('change-password');
Route::post('update-password', [AuthController::class, 'updatePassword'])->name('update-password');

Route::get('forgot-password', [AuthController::class, 'forgotPassword'])->name('forgot-password');
Route::post('forgot-password', [AuthController::class, 'forgotPasswordSubmit'])->name('forgot-password');
Route::get('reset-password/{token}', [AuthController::class, 'resetPassword'])->name('reset-password');
Route::post('reset-password', [AuthController::class, 'resetPasswordSubmit'])->name('reset-password');





Route::get('logout', [AuthController::class, 'logout']);

Route::get('verify-account/{token}', [AuthController::class, 'VerifyAccount'])->name('user.verify');


Route::post('get-states',[AuthController::class, 'getState']);
Route::post('get-cities',[AuthController::class, 'getCity']);

Route::get('refresh-captcha', [AuthController::class, 'refreshCaptcha'])->name('refresh.captcha');

Route::get('products', [ProductController::class, 'index'])->name('products');
Route::get('add-to-cart/{id}', [ProductController::class, 'addToCart'])->name('addToCart');
Route::get('cart', [ProductController::class, 'cart'])->name('cart');
Route::post('delete-cart-product', [ProductController::class, 'deleteCartProduct'])->name('delete.cart.product');
Route::get('order', [ProductController::class, 'order'])->name('order');




//admin
//admin
Route::get('admin-login',[AdminController::class, 'index']);

Route::post('admin-login-post', [AdminController::class, 'postAdminLogin'])->name('admin.login.post');
Route::get('admin-register',[AdminController::class, 'adminRegister']);
Route::get('admin/dashboard',[AdminController::class, 'dashboard'])->name('admin.dashboard')->middleware(['auth','user-type-access']);
Route::get('admin/users',[AdminController::class, 'users']);
Route::get('admin/edit-user/{id}',[AdminController::class, 'editUser']);
Route::post('admin/update-user',[AdminController::class, 'updateUser']);
Route::get('admin/products',[AdminController::class, 'products']);
Route::get('admin/add-product',[AdminController::class, 'add_product'])->middleware(['auth','user-type-access']);
Route::post('admin/save-product', [AdminController::class, 'saveProduct'])->name('admin.add.product');

Route::get('admin/edit-product/{id}',[ProductController::class, 'editProduct']);


Route::get('admin/orders',[AdminController::class, 'orders']);






