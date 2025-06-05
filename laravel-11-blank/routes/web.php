<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

// Add rate limit middleware
Route::POST('geo/ip-info', [App\Http\Controllers\ApiController::class, 'getIpInfo'])
    ->name('ipinfo')
    ->middleware('throttle:60,1');

Route::get('/', function () {
    return view('index');
})->name('home');

Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/dropdown', function () {
    return view('dropdown');
})->name('dropdown');

Route::get('/marquee', function () {
    return view('components.marquee');
});

Route::get('/form', function () {
    return view('components.form');
});

// Route::post('/form-submit', function (Request $request) {
//     return 'Form submitted successfully!';
// })->name('form.submit');

Route::get('/check', function () {  // ✅ Fixed syntax error
    return view('components.check');
});

Route::get('/accordian', function () {
    return view('components.accordian');
});

Route::get('/alert', function () {
    return view('components.alert');
});

Route::get('/badge', function () {
    return view('components.badge');
});

Route::get('/breadcrum', function () {
    return view('components.breadcrum');
});

Route::get('/button', function () {
    return view('components.button');
});

Route::get('/card', function () {
    return view('components.card');
});


