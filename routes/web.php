<?php

// use Illuminate\Support\Facades\Auth;
// use Illuminate\Support\Facades\Auth;
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

// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes();


Route::get('/', [App\Http\Controllers\Frontend\FrontendController::class, 'index']);
Route::get('/collections', [App\Http\Controllers\Frontend\FrontendController::class, 'categories']);
Route::get('/collections/{category_slug}', [App\Http\Controllers\Frontend\FrontendController::class, 'products']);
Route::get('/collections/{category_slug}/{product_slug}', [App\Http\Controllers\Frontend\FrontendController::class, 'productView']);
Route::get('/product-terbaru', [App\Http\Controllers\Frontend\FrontendController::class, 'ProductTerbaru']);
Route::get('/search', [App\Http\Controllers\Frontend\FrontendController::class, 'search']);
Route::get('thank-you', [App\Http\Controllers\Frontend\FrontendController::class, 'thankyou']);
Route::get('tentang-kami', [App\Http\Controllers\Frontend\FrontendController::class, 'TentangKami']);
Route::get('hubungi-kacontohmi', [App\Http\Controllers\Frontend\FrontendController::class, 'HubungiKami']);








Route::middleware(['auth'])->group(function () {    
    Route::get('/wishlist', [App\Http\Controllers\Frontend\WishlistController::class, 'index']);
    Route::get('/cart', [App\Http\Controllers\Frontend\CartController::class, 'index']);
    Route::get('/checkout', [App\Http\Controllers\Frontend\CheckoutController::class, 'index']);
    Route::get('/orders', [App\Http\Controllers\Frontend\OrderController::class, 'index']);
    Route::get('/orders/{orderId}', [App\Http\Controllers\Frontend\OrderController::class, 'show']);

    Route::get('/riwayat-pesanan', [App\Http\Controllers\Frontend\FrontendController::class, 'RiwayatPesanan']);
    Route::get('/riwayat-pesanan/{order_tracking_no}', [App\Http\Controllers\Frontend\FrontendController::class, 'RiwayatPesananShow']);


    Route::get('/profile', [App\Http\Controllers\Frontend\ProfileController::class, 'index']);
    Route::post('/profile', [App\Http\Controllers\Frontend\ProfileController::class, 'update']);

    Route::get('/ganti-password', [App\Http\Controllers\Frontend\ProfileController::class, 'passwordCreate']);
    Route::post('/ganti-password', [App\Http\Controllers\Frontend\ProfileController::class, 'changePassword']);

    Route::post('/review', [App\Http\Controllers\Frontend\ReviewController::class, 'review']);
    Route::post('hubungi-kami', [App\Http\Controllers\Frontend\FrontendController::class, 'HubungiKamiStore']);
    Route::get('hubungi-kami', [App\Http\Controllers\Frontend\FrontendController::class, 'HubungiKami']);


    Route::post('/change-profile-picture',[App\Http\Controllers\Frontend\ProfileController::class, 'changeProfilePicture'])->name('change-profile-picture');

    
}); 


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::prefix('admin')->middleware(['auth','isAdmin'])->group(function(){

    Route::get('dashboard',[App\Http\Controllers\Admin\DashboardController::class, 'index']);
    Route::get('setting',[App\Http\Controllers\Admin\DashboardController::class, 'setting']);
    Route::get('ganti-password',[App\Http\Controllers\Admin\DashboardController::class, 'GantiPassword']);


// Route::post('/change-profile-picture',[DashboardController::class,'changeProfilePicture'])->name('change-profile-picture');
    
    Route::controller(App\Http\Controllers\Admin\TentangKamiController::class)->group(function (){
        Route::get('/tentang-kami','index');
        Route::get('/tentang-kami/create','create');
        Route::post('/tentang-kami/create','store');
        Route::get('/tentang-kami/{TentangKami}/edit','edit');
        Route::put('/tentang-kami/{TentangKami}','update');
        Route::get('/tentang-kami/{TentangKami}/delete','destroy');

    });

    Route::controller(App\Http\Controllers\Admin\HubungiKamiController::class)->group(function (){
        Route::get('/hubungi-kami','index');
        Route::get('/hubungi-kami/{id}','HubungiKamidetail');

        // Route::get('/hubungi-kami/create','create');
        // Route::post('/hubungi-kami/create','store');
        // Route::get('/hubungi-kami/{HubungiKami}/edit','edit');
        // Route::put('/hubungi-kami/{HubungiKami}','update');
        // Route::get('/hubungi-kami/{HubungiKami}/delete','destroy');
    });

    Route::controller(App\Http\Controllers\Admin\SliderController::class)->group(function (){
        Route::get('/sliders','index');
        Route::get('/sliders/create','create');
        Route::post('/sliders/create','store');
        Route::get('/sliders/{slider}/edit','edit');
        Route::put('sliders/{slider}','update');
        Route::get('sliders/{slider}/delete','destroy');

    });

    Route::controller(App\Http\Controllers\Admin\BannerOneController::class)->group(function (){
        Route::get('/banner-one','index');
        Route::get('/banner-one/create','create');
        Route::post('/banner-one/create','store');
        Route::get('/banner-one/{banner}/edit','edit');
        Route::put('/banner-one/{banner}/edit','update');
        Route::get('/banner-one/{BannerOne}/delete','destroy');
    });

    Route::controller(App\Http\Controllers\Admin\BannerTwoController::class)->group(function (){
        Route::get('/banner-two','index');
        Route::get('/banner-two/create','create');
        Route::post('/banner-two/create','store');
        Route::get('/banner-two/{BannerTwo}/edit','edit');
        Route::put('/banner-two/{BannerTwo}/edit','update');
        Route::get('/banner-two/{BannerTwo}/delete','destroy');
    });

    Route::controller(App\Http\Controllers\Admin\BannerThreeController::class)->group(function (){
        Route::get('/banner-three','index');
        Route::get('/banner-three/create','create');
        Route::post('/banner-three/create','store');
        Route::get('/banner-three/{BannerThree}/edit','edit');
        Route::put('/banner-three/{BannerThree}/edit','update');
        Route::get('/banner-three/{BannerThree}/delete','destroy');
    });
    
    
    
    // Route Category
    Route::controller(App\Http\Controllers\Admin\CategoryController::class)->group(function (){
        Route::get('/category','index');
        Route::get('/category/create','create');
        Route::Post('/category','store');
        Route::get('/category/{category}/edit','edit');
        Route::put('/category/{category}','update');
        Route::get('/category/{category}/delete','destroy');
    });
    Route::controller(App\Http\Controllers\Admin\ProductController::class)->group(function (){
        Route::get('/products','index');
        Route::get('/products/create','create');
        Route::Post('/products','store');
        Route::get('/products/{product}/edit','edit');    
        Route::put('/products/{product}','update');
        Route::get('/products/{product_id}/delete','destroy');
        Route::get('/product-image/{product_image_id}/delete','destroyImage');

        Route::post('/product-color/{prod_color_id}','updatedProdColorQty');
        Route::get('/product-color/{prod_color_id}/delete','deleteProdColor');


    });

    Route::controller(App\Http\Controllers\Admin\ColorController::class)->group(function (){
        Route::get('/colors','index');
        Route::get('/colors/create','create');  
        Route::post('/colors/create','store');  
        Route::get('/colors/{color}/edit','edit');
        Route::put('/colors/{color_id}','update'); 
        Route::get('/colors/{color_id}/delete','destroy');

    });

    Route::get('/brands',App\Http\Livewire\Admin\Brand\Index::class);
    Route::get('/on-sale',App\Http\Livewire\Admin\OnSale\Index::class);


    Route::controller(App\Http\Controllers\Admin\PemesanController::class)->group(function (){
        Route::get('/pemesan','index');
        Route::get('/pemesan/{id_pemesan}','show');
        Route::put('/pemesan/{id_pemesan}','update');
        Route::get('/invoice/{id_pemesan}','ViewInvoice');
        Route::get('/invoice/{id_pemesan}/generate','generateInvoice');
        Route::get('/invoice/{id_pemesan}/generate','generateInvoice');
        Route::get('/invoice/{id_pemesan}/email','InvoiceEmail');

    });

    Route::controller(App\Http\Controllers\Admin\UserController::class)->group(function (){
        Route::get('/users','index');
        Route::get('/users/create','create');
        Route::post('/users/create','store');
        Route::get('/users/{id}/edit','edit');
        Route::put('/users/{id}/edit','update');
        Route::get('/users/{id}/delete','destroy');

    });
    


});
