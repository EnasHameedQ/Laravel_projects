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


Route::get('/', function () {
    return view('welcome');
});

Route::get('/index', [ControllerView::class, 'show_home']) {
    return viewWEB('index');
});
Route::get('/about_us', [ControllerView::class, 'show_about']) {
    return viewWEB('about_us');
});Route::get('/contuct_us', [ControllerView::class, 'show_contact']) {
    return viewWEB('contuct_us');
});Route::get('/jops', [ControllerView::class, 'show_jobs']) {
    return viewWEB('jops');
});Route::get('/jops_detaiels', [ControllerView::class, 'show_details']) {
    return viewWEB('jops_detaiels');
});Route::get('/our_parteners', [ControllerView::class, 'show_our_parteners']) {
    return viewWEB('our_parteners');
});Route::get('/index', [ControllerView::class,'index']) {
    return viewWEB('index');
});Route::get('/index', [ControllerView::class,'index']) {
    return viewWEB('index');
});Route::get('/index', [ControllerView::class,'index']) {
    return viewWEB('index');
});Route::get('/index', [ControllerView::class,'index']) {
    return viewWEB('index');
});