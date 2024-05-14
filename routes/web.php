<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsingApi\ProductController as ProductControllerUsingApi;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProfileController;

use App\Http\Controllers\TrainingCoursesController;

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



// Route to show registration form
Route::view('register', 'auth.register')->middleware('guest')->name('register');

// Route to handle registration form submission
Route::post('store', [RegisterController::class, 'store'])->name('register.store');

// Route to home page, only accessible to authenticated users
Route::view('home', 'dashboard.pages.home')->middleware('auth')->name('dashboard.index');

Route::get('user-profile', [ProfileController::class, 'show'])->name('dashboard.user-profile');
// Route to show login form
Route::view('login', 'auth.login')->middleware('guest')->name('login');



Route::get('/dashboard/products', [ProductController::class, 'index'])->name('dashboard.products.viewAllProducts');



Route::prefix('dashboard')->group(function () {
    Route::post('/add', [ProductController::class, 'store'])->name('dashboard.products.add');
    Route::get('/show/{id}', [ProductController::class, 'show'])->name('dashboard.products.show');

    Route::post('products/{id}', [ProductController::class, 'destroy'])->name('dashboard.product.destroy');
});


Route::post('authenticate', [LoginController::class, 'authenticate'])->name('authenticate');

// Route to handle logout
Route::get('logout', [LoginController::class, 'logout'])->name('logout');


// Home Page
Route::get('/', function () {
    return view('index');
})->name('home-page');

// Engineering Services Routes
Route::get('/engineering-services', function () {
    return view('engineering-services.engineering');
})->name('engineering-services');

Route::get('/engineering-services/chemical', function () {
    return view('engineering-services.chemical-engineering');
})->name('chemical-engineering');

Route::get('/engineering-services/management-planning', function () {
    return view('engineering-services.management-planning');
})->name('management-planning');

Route::get('/engineering-services/skilled-labour-supply', function () {
    return view('engineering-services.skilled-labour-supply');
})->name('skilled-labour-supply');

Route::get('/engineering-services/setting-out-levelling', function () {
    return view('engineering-services.setting-out-levelling');
})->name('setting-out-levelling');

Route::get('/engineering-services/smart-sealing-solutions', function () {
    return view('engineering-services.smart-sealing-solutions');
})->name('smart-sealing-solutions');

Route::get('/engineering-services/driveways', function () {
    return view('engineering-services.driveways');
})->name('driveways');

Route::get('/engineering-services/patios', function () {
    return view('engineering-services.patios');
})->name('patios');

Route::get('/engineering-services/concrete', function () {
    return view('engineering-services.concrete');
})->name('concrete');

Route::get('/engineering-services/cavity-wall-loft-insulation', function () {
    return view('engineering-services.cavity-wall-loft-insulation');
})->name('cavity-wall-loft-insulation');

Route::get('/engineering-services/cctc-security-alarms', function () {
    return view('engineering-services.cctc-security-alarms');
})->name('cctc-security-alarms');

Route::get('/engineering-services/protection-screens-Fitting-services', function () {
    return view('engineering-services.protection-screens-Fitting-services');
})->name('protection-screens-Fitting-services');

// Procedures and Templates
Route::get('/procedures-and-templates/procedures-and-templates', function () {
    return view('procedures-and-templates.procedures-and-templates');
})->name('procedures-and-templates');

// Property Investments
Route::get('/property-investments/property-investments', function () {
    return view('property-investments.property-investments');
})->name('property-investments');

// Cleaning  Service Routes
Route::get('/cleaning-service', function () {
    return view('cleaning-and-sealing-service.cleaning-service');
})->name('cleaning-services');

// Contact Us
Route::get('/contact-us', function () {
    return view('contact-us.contact-us');
})->name('contact-us');

//Sealing Service Routes
Route::get('/sealing-services', [ProductController::class, 'showProductsSlideShow'])->name('sealing-services');

Route::get('/products', [ProductController::class, 'showProducts'])->name('products');

Route::get('/training', [TrainingCoursesController::class, 'fetchTrainingData'])->name('training');



Route::get('/sealing-services/concrete-sealing', function () {
    return view('sealing-services.concrete-sealing');
})->name('concrete-sealing');


Route::view('/sealing-services/roof-sealing', 'sealing-services.roof-sealing')->name('roof-sealing');
Route::view('/sealing-services/sealing-patios', 'sealing-services.sealing-patios')->name('sealing-patios');
Route::view('/sealing-services/driveways', 'sealing-services.sealing-driveways')->name('sealing-driveways');
Route::view('/sealing-services/brick-sealing', 'sealing-services.brick-sealing')->name('brick-sealing');
Route::view('/sealing-services/wood-sealing', 'sealing-services.wood-sealing')->name('wood-sealing');
