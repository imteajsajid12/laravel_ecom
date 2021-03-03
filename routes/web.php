<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MemberController;
use App\Http\Controllers\AdminController;

use App\Http\Controllers\backendloginController;
use Illuminate\Support\Facades\Auth;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!

*/
Auth::routes();
Route::get('home', [MemberController::class, 'home'])->name('home');
Route::get('/', [MemberController::class, 'home'])->name('home');

Route::get('shop', [MemberController::class, 'shop'])->name('shop');
Route::post('home1', [MemberController::class, 'index'])->name('home1');
Route::get('Delete/coustomer/{id}', [MemberController::class, 'Delete']);
Route::get('cart', [MemberController::class, 'cart'])->name('cart');
Route::get('delete/{id}', [MemberController::class, 'deletecart']);
Route::get('about', [MemberController::class, 'about']);




Route::get('detelase/{id}', [MemberController::class, 'detelse']);
Route::get('detelase1/{id}', [MemberController::class, 'detelse1']);
//scearch
Route::get('scearch/', [MemberController::class, 'scearch']);


//addcard
Route::post('detelase/addcart', [HomeController::class, 'cart1'])->name('addcart');
Route::get('cartdelete/{id}', [HomeController::class, 'cartdelete']);
Route::get('cartupdae', [HomeController::class, 'update']);
Route::post('/order', [HomeController::class, 'ordernow'])->name('order');

//end
//contect
Route::get('/contact', [MemberController::class, 'contact']);
Route::Post('/contacts1', [MemberController::class, 'contacts'])->name('contacts1');
//mail
Route::get('/send-mail', [MemberController::class, 'mail']);

//end




//backend
Route::get('admin/delete{id}', [MemberController::class, 'admindelete']);



//
Route::get('/admin/home', [AdminController::class, 'admin1']);
Route::get('admin', [backendloginController::class, 'showLoginForm'])->name('admin.login');
Route::post('admin', [backendloginController::class,'Login']);
//
Route::get('/admin/add_product', [AdminController::class, 'adminsave']);
Route::post('admin_add', [AdminController::class, 'admin'])->name('admin_add');
Route::get('admin/delete{id}', [AdminController::class, 'admindelete']);
Route::get('/admin/product_table', [AdminController::class, 'show_product'])->name('table');
Route::get('/admin/order', [AdminController::class, 'order']);
Route::get('/admin/contacts', [AdminController::class, 'contracts']);
Route::get('admin/contacts{id}', [AdminController::class, 'delete']);
Route::get('admin/detelase/{id}', [AdminController::class, 'detelse']);
Route::get('admin/add', [AdminController::class, 'delevery_delete'])->name('delevery_delete');
//Route::Post('delevery', [AdminController::class, 'delevery_delete'])->name('delevery_delete');
Route::get('/admin/sell', [AdminController::class, 'sell']);
Route::get('admin/sell/{id}', [AdminController::class, 'sell_delete']);





