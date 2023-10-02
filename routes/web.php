<?php

use App\Livewire\AboutComponent;
use App\Livewire\BlogComponent;
use App\Livewire\CartComponent;
use App\Livewire\ContactComponent;
use App\Livewire\FAQComponent;
use App\Livewire\HomeComponent;
use App\Livewire\ShopComponent;
use App\Livewire\WatchlistComponent;
use Illuminate\Foundation\Console\AboutCommand;
use Illuminate\Support\Facades\Route;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/',HomeComponent::class)->name('home');
Route::get('/shop',ShopComponent::class)->name('shop');
Route::get('/contact',ContactComponent::class)->name('contact');
Route::get('/about',AboutComponent::class)->name('about');
Route::get('/cart',CartComponent::class)->name('cart');
Route::get('/watchlist',WatchlistComponent::class)->name('watchlist');
Route::get('/blog',BlogComponent::class)->name('blog');
Route::get('/faq',FAQComponent::class)->name('faq');

// Route::middleware([
//     'auth:sanctum',
//     config('jetstream.auth_session'),
//     'verified',
// ])->group(function () {
//     Route::get('/dashboard', function () {
//         return view('dashboard');
//     })->name('dashboard');
// });

//Admin
Route::middleware(['auth:sanctum','verified'])->prefix('admin')->group(function(){

});
