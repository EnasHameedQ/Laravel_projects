<?php

use App\Http\ControllerViews\ControllerView;
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
// web pages

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/index', [ControllerView::class, 'show_home']) {
//     return view('web.index');
// });
// Route::get('/about_us', [ControllerView::class, 'show_about']) {
//     return view('web.about_us');
// });Route::get('/contuct_us', [ControllerView::class, 'show_contact']) {
//     return view('web.contuct_us');
// });Route::get('/jops', [ControllerView::class, 'show_jobs']) {
//     return view('web.jops');
// });Route::get('/jops_detaiels', [ControllerView::class, 'show_details']) {
//     return view('web.jops_detaiels');
// });Route::get('/our_parteners', [ControllerView::class, 'show_our_parteners']) {
//     return view('web.our_parteners');
// });Route::get('/index', [ControllerView::class,'index']) {
//     return view('web.index');
// });Route::get('/index', [ControllerView::class,'index']) {
//     return view('web.index');
// });Route::get('/index', [ControllerView::class,'index']) {
//     return view('web.index');
// });Route::get('/register', [ControllerView::class, 'show_register']) {
//     return view('web.register');
// });

//  admin pages