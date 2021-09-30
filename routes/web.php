<?php

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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
