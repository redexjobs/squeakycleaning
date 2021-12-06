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
	
	#BLOG CATEGORY
	Route::get('/blog-category', [AdminController::class, 'all_blog_category'])->name('dashboard.all_blog_category'); 
	Route::get('/add-blog-category', [AdminController::class, 'add_blog_category'])->name('dashboard.add_blog_category');
	Route::post('/add_blog_category_action', [AdminController::class, 'add_blog_category_action'])->name('dashboard.add_blog_category_action');	
	Route::get('/edit_blog_category/{id}', [AdminController::class, 'edit_blog_category'])->name('dashboard.edit_blog_category');
	Route::post('/edit_blog_category_action', [AdminController::class, 'edit_blog_category_action'])->name('dashboard.edit_blog_category_action');	
	Route::get('/blog-category/delete_blog_category/{id}', [AdminController::class, 'delete_blog_category'])->name('dashboard.delete_blog_category'); 
	
});

#FRONTEND ROUTES
	
	#HOME
	Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
	
	Route::get('/sign-in', [App\Http\Controllers\HomeController::class, 'sign_in'])->name('sign_in');
	
	Route::get('/services', [App\Http\Controllers\HomeController::class, 'services'])->name('services');
	Route::get('/car-services-cost', [App\Http\Controllers\HomeController::class, 'car_services_cost'])->name('car_services_cost');
	Route::get('/cleaner', [App\Http\Controllers\HomeController::class, 'cleaner'])->name('cleaner');
	Route::get('/inspiration', [App\Http\Controllers\HomeController::class, 'inspiration'])->name('inspiration');
	Route::get('/indoor-projects', [App\Http\Controllers\HomeController::class, 'indoor_projects'])->name('indoor_projects');
	Route::get('/outdoor-projects', [App\Http\Controllers\HomeController::class, 'outdoor_projects'])->name('outdoor_projects');
	Route::get('/lifestyle', [App\Http\Controllers\HomeController::class, 'lifestyle'])->name('lifestyle');
	Route::get('/professional-services', [App\Http\Controllers\HomeController::class, 'professional_services'])->name('professional_services');
	Route::get('/weddings', [App\Http\Controllers\HomeController::class, 'weddings'])->name('weddings');
	Route::get('/blog', [App\Http\Controllers\HomeController::class, 'all_blog'])->name('all_blog');
	Route::get('/blog-details', [App\Http\Controllers\HomeController::class, 'blog_details'])->name('blog_details');
	Route::get('/terms-services', [App\Http\Controllers\HomeController::class, 'terms_services'])->name('terms_services');
	Route::get('/privacy-policy', [App\Http\Controllers\HomeController::class, 'privacy_policy'])->name('privacy_policy');
	Route::get('/contact-us', [App\Http\Controllers\HomeController::class, 'contact_us'])->name('contact_us');
	Route::get('/about-us', [App\Http\Controllers\HomeController::class, 'about_us'])->name('about_us');
		
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