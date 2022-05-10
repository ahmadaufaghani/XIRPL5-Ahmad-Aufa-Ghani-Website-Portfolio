<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ServicesController;
use App\Http\Controllers\PortfolioController;
use App\Http\Controllers\TestimonialsController;
use App\Models\About;
use App\Models\Portfolio;
use App\Models\Services;
use App\Models\Testimonials;

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
    $about_index = About::all();    
    $services_index = Services::all();   
    $portfolio_index = Portfolio::all();
    $testimonials_index = Testimonials::all();
    return view('index', [
        "title"=>"Home",
        "nama" => "Ahmad Aufa Ghani",
        "email" => "3103120010@student.smktelkom-pwt.sch.id",
        "deskripsi" => "Hi there, I'm student of Vocational School in Purwokerto that is SMK Telkom Purwokerto and the degree that i took is Software Engineering and now i'm in second grade in my school and I will make website like you want. ",
        "gambar" => "ghani.jpg",
        "email" => "3103120010@student.smktelkom-pwt.sch.id",
        "phone" => "+6281225212170",
        "address" => "Jl. DI Panjaitan No.128, Karangreja, Purwokerto Kulon, Kec. Purwokerto Sel., Kabupaten Banyumas, Jawa Tengah"
    ], compact('about_index','services_index', 'portfolio_index','testimonials_index'));
})->name('home.index')  ;


Route::get('/gallery', function () {
    return view('gallery',[
        "title"=>"Gallery"
    ]);
});

//Route::resource('/contacts',ContactController::class);
Route::post('/contacts/store', [ContactController::class, 'store'])->name('contacts.store');

Auth::routes();

Route::group(['middleware' => ['auth']], function () {
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
    Route::get('/contacts/index', [ContactController::class, 'index'])->name('contacts.index');
    Route::get('/contacts/{id}/edit', [ContactController::class, 'edit'])->name('contacts.edit');
    Route::post('/contacts/{id}/update', [ContactController::class, 'update'])->name('contacts.update');
    Route::get('/contacts/{id}/destroy', [ContactController::class, 'destroy'])->name('contacts.destroy');
    Route::get('/about', [AboutController::class, 'index'])->name('about.index');
    Route::get('/about/create', [AboutController::class, 'create'])->name('about.create');
    Route::post('/about/store', [AboutController::class, 'store'])->name('about.store');
    Route::get('/about/{id}/edit', [AboutController::class, 'edit'])->name('about.edit');
    Route::post('/about/{id}/update', [AboutController::class, 'update'])->name('about.update');
    Route::get('/about/{id}/destroy', [AboutController::class, 'destroy'])->name('about.destroy');
    Route::get('/services/index', [ServicesController::class, 'index'])->name('services.index');
    Route::get('/services/create', [ServicesController::class, 'create'])->name('services.create');
    Route::post('/services/store', [ServicesController::class, 'store'])->name('services.store');
    Route::get('/services/{id}/edit', [ServicesController::class, 'edit'])->name('services.edit');
    Route::post('/services/{id}/update', [ServicesController::class, 'update'])->name('services.update');
    Route::get('/services/{id}/destroy', [ServicesController::class, 'destroy'])->name('services.destroy');
    Route::get('/portfolio/index', [PortfolioController::class, 'index'])->name('portfolio.index');
    Route::get('/portfolio/create', [PortfolioController::class, 'create'])->name('portfolio.create');
    Route::post('/portfolio/store', [PortfolioController::class, 'store'])->name('portfolio.store');
    Route::get('/portfolio/{id}/edit', [PortfolioController::class, 'edit'])->name('portfolio.edit');
    Route::post('/portfolio/{id}/update', [PortfolioController::class, 'update'])->name('portfolio.update');
    Route::get('/portfolio/{id}/destroy', [PortfolioController::class, 'destroy'])->name('portfolio.destroy');
    Route::get('/testimonials/index', [TestimonialsController::class, 'index'])->name('testimonials.index');
    Route::get('/testimonials/create', [TestimonialsController::class, 'create'])->name('testimonials.create');
    Route::post('/testimonials/store', [TestimonialsController::class, 'store'])->name('testimonials.store');
    Route::get('/testimonials/{id}/edit', [TestimonialsController::class, 'edit'])->name('testimonials.edit');
    Route::post('/testimonials/{id}/update', [TestimonialsController::class, 'update'])->name('testimonials.update');
    Route::get('/testimonials/{id}/destroy', [TestimonialsController::class, 'destroy'])->name('testimonials.destroy');
});


