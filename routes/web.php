<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;

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

Route::get('/', function () {
    return view('home');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/contact', function () {
    return view('contact');
})->name("Contact Form");

Route::post('/contact', [ContactController::class, 'ContactForm'])->name("Contact Form Backend");

Route::get('/service/financial_advisory_consulting', function () {
    return view('financial_advisory_consulting');
});

Route::get('/service/accounting_bookkeeping', function () {
    return view('accounting_bookkeeping');
});

Route::get('/service/risk_assessment_management', function () {
    return view('risk_assessment_management');
});

Route::get('/service/financial_statement_preparation', function () {
    return view('financial_statement_preparation');
});
