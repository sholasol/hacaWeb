<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DocumentController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\FrontController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\MembersController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RentalController;
use App\Http\Controllers\StripeController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });



Route::get('/', [FrontController::class, 'index'])->name('home');
Route::get('/about', [FrontController::class, 'about'])->name('about');
Route::get('/contact', [FrontController::class, 'contact'])->name('contact');
Route::get('/docs', [FrontController::class, 'docs'])->name('docs');
Route::get('/event', [FrontController::class, 'event'])->name('event');
Route::get('/video', [FrontController::class, 'video'])->name('video');
Route::get('/eventShow/{id}', [FrontController::class, 'show'])->name('event.detail');
Route::get('/gallery', [FrontController::class, 'gallery'])->name('gallery');
Route::get('/news', [FrontController::class, 'news'])->name('news');
Route::get('/register', [FrontController::class, 'register'])->name('register');
Route::get('/rent', [FrontController::class, 'rent'])->name('rent');
Route::get('/business', [FrontController::class, 'business'])->name('business');
Route::get('/community', [FrontController::class, 'community'])->name('community');

//payment
Route::get('/pay/{id}', [StripeController::class, 'pay'])->name('payment');
Route::post('/stripe', [StripeController::class, 'stripe'])->name('stripe');
Route::get('/success', [StripeController::class, 'success'])->name('success');
Route::get('/cancel', [StripeController::class, 'cancel'])->name('cancel');
Route::get('/invoice/{payment_id}', [StripeController::class, 'invoice'])->name('invoice');

Route::post('/contactus', [FrontController::class, 'contactus'])->name('contactus');
Route::post('/regBiz', [FrontController::class, 'regBiz'])->name('regBiz');

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/dashboard', [DashboardController::class, 'index'])->middleware(['auth'])->name('dashboard');

Route::middleware('auth')->group(function () {

    Route::get('/payment', [MembersController::class, 'payment'])->name('payment');
    Route::get('/payInvoice/{id}', [MembersController::class, 'payInvoice'])->name('payment.invoice');


    Route::get('/businesses', [MembersController::class, 'business'])->name('businesses');
    Route::get('/members', [MembersController::class, 'index'])->name('members');
    Route::get('/communities', [MembersController::class, 'communities'])->name('communities');
    Route::get('/inquiry', [MembersController::class, 'inquiry'])->name('inquiry');

    //rentals
    Route::get('/rentals', [RentalController::class, 'index'])->name('rentals');
    Route::get('/create_rent', [RentalController::class, 'create'])->name('create_rent');
    Route::post('/createRental', [RentalController::class, 'store'])->name('createRental');
    Route::get('/rental/{rental}/edit', [RentalController::class, 'edit'])->name('rental.edit');
    Route::put('/updateRental/{rental}', [RentalController::class, 'update'])->name('rental.update');

    //events
    Route::get('/events', [EventController::class, 'index'])->name('events');
    Route::get('/create_event', [EventController::class, 'create'])->name('create_event');
    Route::get('/event/{event}/edit', [EventController::class, 'edit'])->name('edit.event');
    Route::post('/createEvent', [EventController::class, 'store'])->name('createEvent');
    Route::put('/updateEvent/{event}', [EventController::class, 'update'])->name('event.update');
    Route::get('/delEvent/{event}', [EventController::class, 'destroy'])->name('delEvent');

    //document
    Route::get('/documents',[DocumentController::class, 'index'])->name('documents');
    Route::get('/create_document',[DocumentController::class, 'create'])->name('create.document');
    Route::get('/createnews',[DocumentController::class, 'create_news'])->name('create.news');
    Route::get('/newsletter',[DocumentController::class, 'newsletter'])->name('newsletter');
    Route::post('/createDoc',[DocumentController::class, 'store'])->name('createDoc');
    Route::post('/createNews',[DocumentController::class, 'createNews'])->name('createNews');

    //gallery
    Route::get('/gallery', [GalleryController::class, 'index'])->name('gallery');
    Route::get('/create_gallery', [GalleryController::class, 'create'])->name('create.gallery');
    Route::post('/createGallery', [GalleryController::class, 'store'])->name('createGallery');
    Route::get('/edit_gallery/{gallery}/edit', [GalleryController::class, 'edit'])->name('edit.gallery');
    Route::put('/updateGallery/{gallery}', [GalleryController::class, 'update'])->name('updateGallery');


    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
