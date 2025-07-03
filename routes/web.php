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
    return view('home', ['title' => 'Home']);
});

Route::get('/about', function () {
    return view('about', ['title' => 'About Us']);
});

Route::get('/contact', function () {
    return view('contact', ['title' => 'Contact Us']);
})->name("Contact Form");

Route::post('/contact', [ContactController::class, 'ContactForm'])->name("Contact Form Backend");

Route::get('/service/financial_advisory_consulting', function () {
    return view('financial_advisory_consulting', ['title' => 'Financial Advisory Consulting']);
});

Route::get('/service/accounting_bookkeeping', function () {
    return view('accounting_bookkeeping', ['title' => 'Accounting and Bookkeeping']);
});

Route::get('/service/risk_assessment_management', function () {
    return view('risk_assessment_management', ['title' => 'Risk Assessment Management']);
});

Route::get('/service/financial_statement_preparation', function () {
    return view('financial_statement_preparation', ['title' => 'Financial Statement Preparation']);
});
