<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\FeaturesController;
use App\Http\Controllers\FooterzController;
use App\Http\Controllers\HomePageController;
use App\Http\Controllers\NavbarController;
use App\Http\Controllers\PortfolioController;
use App\Http\Controllers\ServicesController;
use App\Http\Controllers\TeamController;
use App\Http\Controllers\TestimonialsController;

use App\Models\Contact;
use App\Models\Features;
use App\Models\Footerz;
use App\Models\HomePage;
use App\Models\Navbar;
use App\Models\Portfolio;
use App\Models\Services;
use App\Models\Team;
use App\Models\Testimonials;
use Database\Seeders\PortfolioSeeder;
use Database\Seeders\TestimonialsSeeder;
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
Route::get('/', function(){
    $data1 = Navbar::first();
    $data2 = HomePage::first();
    $data3 = Features::first();
    $data4 = Portfolio::first();
    $data5 = Team::first();
    $data6 = Testimonials::first();
    $data7 = Services::first();
    $data8 = Contact::first();
    $data9 = Footerz::first();
    
    return view('index', compact('data1','data2','data3','data4','data5','data6','data7','data8','data9'));
});



Route::resource('/navbar', NavbarController::class)->middleware('auth', 'admin');
Route::resource('/homepage', HomePageController::class)->middleware('auth', 'admin');
Route::resource('/features', FeaturesController::class)->middleware('auth', 'admin');
Route::resource('/portfolio', PortfolioController::class)->middleware('auth', 'admin');
Route::resource('/team', TeamController::class)->middleware('auth', 'admin');
Route::resource('/testimonials', TestimonialsController::class)->middleware('auth', 'admin');
Route::resource('/services', ServicesController::class)->middleware('auth', 'admin');
Route::resource('/contact', ContactController::class)->middleware('auth', 'admin');
Route::resource('/footerz', FooterzController::class)->middleware('auth', 'admin');




// Route::get('/admin', function(){
//     $data1 = Navbar::All();
//     $data2 = HomePage::All();
//     $data3 = Features::All();
//     $data4 = Portfolio::All();
//     $data5 = Team::All();
//     $data6 = Testimonials::All();
//     $data7 = Services::All();
//     $data8 = Contact::All();
//     $data9 = Footerz::All();

//     return view('');
// });

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
