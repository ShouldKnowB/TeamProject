<?php
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AboutusController;
use App\Http\Controllers\ContactusController;
use App\Http\Controllers\ShopController;


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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/about_us', [App\Http\Controllers\AboutusController::class, 'index'])->name('about_us');
Route::get('/shop', [App\Http\Controllers\ShopController::class, 'index'])->name('shop');
Route::get('/contact_us', [App\Http\Controllers\ContactusController::class, 'index'])->name('contact_us');
Route::get('/product_view', [App\Http\Controllers\ProductviewController::class, 'index'])->name('product_view');
Route::get('/cart', [App\Http\Controllers\CartController::class, 'index'])->name('cart');

Route::get('/faqs', [App\Http\Controllers\FAQsController::class, 'index'])->name('faqs');
Route::get('/terms_and_conditions', [App\Http\Controllers\TermsandconditionsController::class, 'index'])->name('terms_and_conditions');
Route::get('/privacy_policy', [App\Http\Controllers\PrivacypolicyController::class, 'index'])->name('privacy_policy');
Route::get('/refund_policy', [App\Http\Controllers\RefundpolicyController::class, 'index'])->name('refund_policy');
Route::get('/terms_of_use', [App\Http\Controllers\TermsofuseController::class, 'index'])->name('terms_of_use');


Route::prefix('admin')->middleware(['auth','isAdmin'])->group(function() {
    Route::get('dashboard', [App\Http\Controllers\Admin\DashboardController::class, 'index']);
     //Product Routes
    Route::controller(App\Http\Controllers\Admin\ProductController::class)->group(function () {
       Route::get('/products', 'index');
       Route::get('/products/create', 'create');
       Route::post('/products', 'store');


    });

     //Category Routes
     Route::controller(App\Http\Controllers\Admin\CategoryController::class)->group(function () {
        Route::get('/category', 'index');
        Route::get('/category/create', 'create');
        Route::post('/category', 'store');
        Route::get('/category/{category}/edit', 'edit');
        Route::put('/category/{category}', 'update');




     });


});
