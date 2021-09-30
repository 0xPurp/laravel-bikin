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
    $data1 = Navbar::all();
    $data2 = HomePage::all();
    $data3 = Features::all();
    $data4 = Portfolio::all();
    $data5 = Team::all();
    $data6 = Testimonials::all();
    $data7 = Services::all();
    $data8 = Contact::all();
    $data9 = Footerz::first();
    
    return view('index', compact('data1','data2','data3','data4','data5','data6','data7','data8','data9'));
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
