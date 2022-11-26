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


/* Main Frontend Routes */
Route::controller(App\Http\Controllers\FrontendController::class)->group(function() {
    Route::get('/', 'index');
    Route::get('/about_us', 'aboutus');
    Route::get('/store', 'categories');
    Route::get('/store/{category_slug}','products');
    Route::get('/store/{category_slug}/{product_slug}','productView');
    Route::get('/contact_us', 'contactus');
    Route::get('/home', 'home');
    Route::get('/faqs', 'faqs');
    Route::get('/terms_and_conditions', 'tandc');
    Route::get('/privacy_policy', 'privacypolicy');
    Route::get('/refund_policy', 'refundpolicy');
    Route::get('/terms_of_use', 'tou');
    Route::get('/products/view', 'productView');
    Route::get('/products/{category_slug}', 'products');

});
Auth::routes();
Route::get('/cart', [App\Http\Controllers\CartController::class, 'index'])->name('cart');

/*Admin Dashboard Routes*/
Route::prefix('admin')->middleware(['auth','isAdmin'])->group(function() {
    Route::get('dashboard', [App\Http\Controllers\Admin\DashboardController::class, 'index']);
     //Product Routes
    Route::controller(App\Http\Controllers\Admin\ProductController::class)->group(function () {
       Route::get('/products', 'index');
       Route::get('/products/create', 'create');
       Route::post('/products', 'store');
       Route::get('/products/{product}/edit', 'edit');
       Route::put('/products/{product}', 'update');
       Route::get('product-image/{product_image_id}/delete','destroyImage');
       Route::get('products/{product_id}/delete','destroy');


    });

    Route::controller(App\Http\Controllers\Admin\CategoryController::class)->group(function () {
        Route::get('/category', 'index');
        Route::get('/category/create', 'create');
        Route::post('/category', 'store');
        Route::get('/category/{category}/edit', 'edit');
        Route::put('/category/{category}', 'update');

     });
    });


     //Customer Routes
     Route::controller(App\Http\Controllers\Admin\UserController::class)->group(function () {
        Route::get('/customer', 'index');

     });










