<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\Frontend\LanguageController;
use App\Http\Controllers\Backend\NewsCategoryController;
use App\Http\Controllers\Backend\NewsController;

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

//// Frontend All Routes /////
/// Multi Language All Routes ////

Route::get('/language/thai', [LanguageController::class, 'Thai'])->name('thai.language');

Route::get('/language/english', [LanguageController::class, 'English'])->name('english.language');

Route::get('/', function () {
    return view('frontend.index');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/nursing-home-business', function () {
    return view('frontend.nursing_home_business');
});

Route::get('/our-brand', function () {
    return view('frontend.our_brand');
});

Route::get('/why-us', function () {
    return view('frontend.why_us');
});

Route::get('/contact-expert', function () {
    return view('frontend.contact_expert');
});

Route::get('/smart-health-device', function () {
    return view('frontend.smart_health_devices');
});

Route::get('/academy', function () {
    return view('frontend.academy');
});

Route::get('/telemed', function () {
    return view('frontend.telemed');
});







Route::get('/dashboard', function () {
    return view('admin.index'); //dashboard
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// Admin All Route
Route::controller(AdminController::class)->group(function(){
    Route::get('/admin/logout', 'destroy')->name('admin.logout');
    Route::get('/change/password', 'ChangePassword')->name('change.password');
    Route::post('/update/password', 'UpdatePassword')->name('update.password');
});

// Backend All Route
// News Caegory
Route::controller(NewsCategoryController::class)->group(function(){
    Route::get('/all/news/category', 'AllNewsCategory')->name('all.news.category');
    Route::get('/add/news/category', 'AddNewsCategory')->name('add.news.category');
    Route::post('/store/news/category', 'StoreNewsCategory')->name('store.news.category');
    Route::get('/edit/news/category/{id}', 'EditNewsCategory')->name('edit.news.category');
    Route::post('/update/news/category/{id}', 'UpdateNewsCategory')->name('update.news.category');
    Route::get('/delete/news/category/{id}', 'DeleteNewsCategory')->name('delete.news.category'); 
   
});

 // News All Route 
 Route::controller(NewsController::class)->group(function () {
    Route::get('/all/news', 'AllNews')->name('all.news');
    Route::get('/add/news', 'AddNews')->name('add.news');
    Route::post('/store/news', 'StoreNews')->name('store.news');
    Route::get('/edit/news/{id}', 'EditNews')->name('edit.news');
    Route::post('/update/news', 'UpdateNews')->name('update.news');
    Route::get('/delete/news/{id}', 'DeleteNews')->name('delete.news');

    // Frontend
    Route::get('/news/details/{id}', 'NewsDetails')->name('news.details');    
    Route::get('/news', 'HomeNews')->name('home.news');
     
});


require __DIR__.'/auth.php';
