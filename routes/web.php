<?php
use App\Http\Controllers\AdminController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::post('/sendemail', 'App\Http\Controllers\mailController@sendmail')->name('sendmail');

Route::get('/checkout/{id}', ['middleware' => 'auth', 'uses' => 'App\Http\Controllers\CheckoutController@index']);

Route::get('/development', 'App\Http\Controllers\PageController@webdevelopment')->name('development');

Route::get('/seo', 'App\Http\Controllers\PageController@seoPage')->name('seo');

Route::get('/digital', 'App\Http\Controllers\PageController@digitalPage')->name('digital');

Route::get('/login', 'App\Http\Controllers\PageController@loginPage')->name('login');

Route::get('/signUp', 'App\Http\Controllers\PageController@signUpPage')->name('signUp');

Route::post('/store', 'App\Http\Controllers\CustomerController@store')->name('customer.store');

Route::get('/readCustomers', 'App\Http\Controllers\CustomerController@read')->name('customer.read');

Route::get('customer/edit/{email}','App\Http\Controllers\CustomerController@edit')->name('customer.edit');

Route::post('customer/update/{email}','App\Http\Controllers\CustomerController@update')->name('customer.update');

Route::get('customer/delete/{email}','App\Http\Controllers\CustomerController@delete')->name('customer.delete');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::post('/admin/save',[AdminController::class, 'save'])->name('admin.save');

Route::post('/admin/check',[AdminController::class, 'check'])->name('admin.check');

Route::get('/admin/logout',[AdminController::class, 'logout'])->name('admin.logout');

Route::group(['middleware'=>['AdminCheck']], function(){
    Route::get('/admin/login',[AdminController::class, 'login'])->name('admin.login');
    Route::get('/admin/register',[AdminController::class, 'register'])->name('admin.register');
    Route::get('/admin/dashboard',[AdminController::class, 'dashboard']);
});

