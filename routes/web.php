<?php

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

Route::get('/', function () {
    return view('home');
})->name('homepage');

Route::get('/privacy-policy', function () {
    return view('privacy');
})->name('privacy');

Route::get('/faq', function () {
    $faqs_left = config('faqs.faqs_now');
    $faqs_right = config('faqs.faqs_after');
    return view('FAQs')->with(['faqs_now' => $faqs_left, 'faqs_after' => $faqs_right]);
})->name('FAQs');
