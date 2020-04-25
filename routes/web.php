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
    return view('index');
});

Route::get('/index', function () {
    return view('index');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/menu', function () {
    return view('menu');
});

Route::get('/gallery', function () {
    return view('gallery');
});

Route::get('/events', function () {
    return view('events');
});

Route::get('/blog', function () {
    return view('blog');
});

Route::get('/reservation', function () {
    return view('reservation');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/admin', function () {
    return view('admin/admin');
});

Route::resource('admin/logo', 'LogoController');
Route::resource('admin/header', 'HeaderController');
Route::resource('admin/banner', 'BannerController');
Route::resource('admin/about', 'AboutController');
Route::resource('admin/services', 'ServicesController');
Route::resource('admin/application', 'ApplicationController');
Route::resource('admin/testimonial', 'TestimonialController');
Route::resource('admin/product', 'ProductController');
Route::resource('admin/footer', 'FooterController');
Route::resource('admin/blog', 'BlogController');
Route::resource('admin/clientlogo', 'ClientlogoController');

Route::resource('admin/contact', 'ContactController');
Route::resource('admin/enquiry', 'EnquiryController');
