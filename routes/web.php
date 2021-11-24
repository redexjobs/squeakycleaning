<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StripeController;
use App\Http\Controllers\PayPalController;
use App\Http\Controllers\PDFController;
use App\Http\Controllers\Admin\AdminController;

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

/* Route::get('/', function () {
    return view('welcome');
}); */

Auth::routes();

#ADMIN ROUTES
Route::group(['namespace' => 'Admin','prefix' => 'admin','middleware' => ['auth','admin']], function () {
    
	#DASHBOARD
	Route::get('/dashboard', [AdminController::class, 'index'])->name('dashboard.index');
	
    #LOGOUT
	Route::post('/logout', [\App\Http\Controllers\Auth\LoginController::class, 'logout']);
	
	#PROFILE
	Route::get('/profile', [AdminController::class, 'profile'])->name('dashboard.profile');
	Route::post('/update_profile', [AdminController::class, 'update_profile'])->name('dashboard.update_profile');
	
    #USERS
	Route::get('/users', [AdminController::class, 'all_users'])->name('dashboard.all_users');
	Route::get('/add-user', [AdminController::class, 'add_user'])->name('dashboard.add_user');
	Route::post('/add_user_action', [AdminController::class, 'add_user_action'])->name('dashboard.add_user_action');
	Route::get('/user/edit/{id}', [AdminController::class, 'edit_user'])->name('dashboard.edit_user');
	Route::post('/user/edit_user_action', [AdminController::class, 'edit_user_action'])->name('dashboard.edit_user_action');
	Route::get('/user/delete/{id}', [AdminController::class, 'delete_user'])->name('dashboard.delete_user');
	
	#GLOBAL SETTING
	Route::get('/setting', [AdminController::class, 'global_setting'])->name('dashboard.global_setting');
	Route::post('/global_setting_action', [AdminController::class, 'global_setting_action'])->name('dashboard.global_setting_action');
	
	#CATEGORY
	Route::get('/category', [AdminController::class, 'all_category'])->name('dashboard.all_category');
	Route::get('/add-category', [AdminController::class, 'add_category'])->name('dashboard.add_category');
	Route::post('/add_category_action', [AdminController::class, 'add_category_action'])->name('dashboard.add_category_action');
	Route::get('/category/edit/{id}', [AdminController::class, 'edit_category'])->name('dashboard.edit_category');
	Route::post('/category/edit_category_action', [AdminController::class, 'edit_category_action'])->name('dashboard.edit_category_action');
	Route::get('/category/delete/{id}', [AdminController::class, 'delete_category'])->name('dashboard.delete_category');
	
	#SERVICE	
	Route::get('/service', [AdminController::class, 'get_service'])->name('dashboard.get_service');
	Route::get('/add-new-service', [AdminController::class, 'add_new_service'])->name('dashboard.add_new_service');
	Route::post('/add_new_service_action', [AdminController::class, 'add_new_service_action'])->name('dashboard.add_new_service_action');
	Route::get('/edit-service/{id}', [AdminController::class, 'edit_service'])->name('dashboard.edit_service');
	Route::post('/edit_service_action', [AdminController::class, 'edit_service_action'])->name('dashboard.edit_service_action');
	Route::get('/delete-service/{id}', [AdminController::class, 'delete_service'])->name('dashboard.delete_service');
	
	#SUBSCRIPTION	
	Route::get('/subscription', [AdminController::class, 'get_subscription'])->name('dashboard.get_service');
	Route::get('/add-new-subscription', [AdminController::class, 'add_new_subscription'])->name('dashboard.add_new_subscription');
	Route::post('/add_new_subscription_action', [AdminController::class, 'add_new_subscription_action'])->name('dashboard.add_new_subscription_action');
	Route::get('/edit-subscription/{id}', [AdminController::class, 'edit_subscription'])->name('dashboard.edit_subscription');
	Route::post('/edit_subscription_action', [AdminController::class, 'edit_subscription_action'])->name('dashboard.edit_subscription_action');
	Route::get('/delete-subscription/{id}', [AdminController::class, 'delete_subscription'])->name('dashboard.delete_subscription');
	
});

#FRONTEND ROUTES
	
	#HOME
	Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
		
	#PAYPAL
	Route::get('payment', [PayPalController::class, 'payment'])->name('payment');
	Route::get('cancel', [PayPalController::class, 'payment'])->name('payment.cancel');
	Route::get('payment/success', [PayPalController::class, 'success'])->name('payment.success');

	#STRIPE
	Route::group(['middleware' => ['auth']], function () {
		Route::get('stripe/{id}', [StripeController::class, 'stripe']);
		Route::post('stripe_action', [StripeController::class, 'stripePost'])->name('stripe.post');
	});
	
	#GENERATE PDF
	Route::get('generate-pdf', [PDFController::class, 'generatePDF']);