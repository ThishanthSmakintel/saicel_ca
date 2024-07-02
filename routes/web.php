<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\website\ProductController_website;
use App\Http\Controllers\website\TrainingCoursesController_website;

use App\Http\Middleware\TrackVisitorMiddleware;
use App\Http\Controllers\SSEController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\website\ServiceController_website;
use App\Http\Controllers\website\MessageController;
use App\Http\Controllers\ContactUsInquiryManagementController;

/*

php artisan cache:clear && php artisan config:clear && php artisan route:clear
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::middleware(['check.connection'])->group(function () {
    // Route to show registration form
    Route::view('register', 'auth.register')->middleware('guest')->name('register');

    // Route to handle registration form submission
    Route::post('store', [RegisterController::class, 'store'])->name('register.store');

    // Route to home page, only accessible to authenticated users
    Route::get('user-profile', [ProfileController::class, 'show'])->middleware('auth')->name('dashboard.user-profile');

    // Route to show login form
    Route::view('login', 'auth.login')->middleware('guest')->name('login');

    Route::post('authenticate', [LoginController::class, 'authenticate'])->name('authenticate');

    Route::get('logout', [LoginController::class, 'logout'])->middleware('auth')->name('logout');


    Route::view('/home', 'dashboard.pages.home')->middleware('auth')->name('dashboard.index');


    // Dashboard routes with prefix
    Route::prefix('dashboard')->middleware('auth')->group(function () {
        Route::get('/products', [ProductController::class, 'index'])->name('dashboard.products.viewAllProducts');
        Route::post('/add', [ProductController::class, 'store'])->name('dashboard.products.add');
        Route::get('/product/show/{id}', [ProductController::class, 'show'])->name('dashboard.products.show');
        Route::post('/product/delete/{id}', [ProductController::class, 'destroy'])->name('dashboard.products.destroy');
        Route::post('/product/update/{id}', [ProductController::class, 'update'])->name('dashboard.products.update');
      

    });

    Route::get('/sse/visitor-count', [SSEController::class, 'sendVisitorCount'])->name('sse.visitor-count');
    Route::get('/sse/most-visited-pages', [SSEController::class, 'readMostVisitedPages'])->name('sse.most-visited-pages');
    Route::get('/sse/most-visited-products', [SSEController::class, 'productVisitStatus'])->name('sse.productVisitStatus');





// Route for rendering the view
Route::get('/received-messages', [ContactUsInquiryManagementController::class, 'index'])->name('dashboard.received-messages');
Route::get('/message/{id}/replies', [ContactUsInquiryManagementController::class, 'showReplies'])->name('message.replies');
Route::post('/message/send-reply', [ContactUsInquiryManagementController::class, 'storeReply'])->name('message.storeReply');
    
});




// WEBSITE routes Start
// Home Page
Route::group(['middleware' => ['track.visitor']], function () {
    // Define your routes here
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






    //Sealing Service Routes



    Route::get('/sealing-services/concrete-sealing', function () {
        return view('sealing-services.concrete-sealing');
    })->name('concrete-sealing');


    Route::view('/sealing-services/roof-sealing', 'sealing-services.roof-sealing')->name('roof-sealing');
    Route::view('/sealing-services/sealing-patios', 'sealing-services.sealing-patios')->name('sealing-patios');
    Route::view('/sealing-services/driveways', 'sealing-services.sealing-driveways')->name('sealing-driveways');
    Route::view('/sealing-services/brick-sealing', 'sealing-services.brick-sealing')->name('brick-sealing');
    Route::view('/sealing-services/wood-sealing', 'sealing-services.wood-sealing')->name('wood-sealing');

    // WEBSITE routes END

    // fetch data in website START
    Route::get('/training', [TrainingCoursesController_website::class, 'fetchTrainingData'])->name('training');
    Route::get('/sealing-services', [ProductController_website::class, 'showProductsSlideShow'])->name('sealing-services');
    Route::get('/products', [ProductController_website::class, 'showProducts'])->name('products');



    
    Route::get('/contact-us', [ServiceController_website::class, 'showServices'])->name("contact-us");
    Route::post('/contact-us', [ServiceController_website::class, 'submitMessage'])->name('contact-us.submit');



// fetch data in website END


});

Route::get('/product/{id}', [ProductController_website::class, 'showThisProduct'])
    ->name('showThisProduct')
    ->middleware(TrackVisitorMiddleware::class);


//sse