<?php

use App\Http\Controllers\EcwidController;
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

//
//Route::match(['get', 'post'], '/redirect', function () {
//    return view('test');
//});
/* BigCommerce App Init */
Route::match(['post','get'], '/ecwid-integration', [EcwidController::class, 'index']);
Route::match(['post','get'], '/spt-base-script', [EcwidController::class, 'getScript']);
Route::match(['post','get'], '/ecwid-web-hooks', [EcwidController::class, 'webHookProcess']);

