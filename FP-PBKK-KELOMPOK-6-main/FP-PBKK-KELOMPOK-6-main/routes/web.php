<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\StudioController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\LocalizationController;
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

Route::get('test',function () {
    return view('test');
});

Route::get('/login', function () {
    return view('login');
});
Route::get('/', function () {
    return view('home');
});
Route::get('/logout', 'AuthController@logout');


Route::get('schedule', 'ScheduleController@index' );
Route::get('schedule/getdata', 'ScheduleController@getDataTransaksi' );


Route::get('/login','AuthController@getLogin');
Route::post('/login','AuthController@postLogin')->name('login');
// Route::get('/home',function() {
//     return view('tambahsewa');
// })->name('home');
Route::get('/home','DashboardController@index')->name('home');

Route::get('/tambahsewa', 'TambahSewaController@index');
Route::post('/tambahsewa/input', 'TransaksiController@store');
Route::get('/tambahsewa/datalapangan', 'TambahSewaController@dataStudio');

Route::get('/rekap', 'RekapController@index');
//Route::post('/rekap/filter', 'RekapController@filter');
Route::get('/rekap/filter', 'RekapController@filter');
Route::get('/rekap/excel/{dari}/{ke}', 'RekapController@eksporExcel')->name('excel.ekspor');
Route::get('/rekap/getDataRekap/{dari}/{ke}', 'RekapController@getDataRekapBulanan');

Route::get('/daftarpenyewa', 'TransaksiController@index');
Route::delete('/daftarpenyewa/{transaksi}','TransaksiController@destroy');
// Route::get('/daftarpenyewa/{transaksi}/edit','TransaksiController@edit');
Route::put('/daftarpenyewa/{transaksi}','TransaksiController@update');

Route::get('/profile', 'StudioController@index');

Route::get('/register', [RegisterController::class, 'create'])->middleware('guest');
Route::post('/register', [RegisterController::class, 'store']);
Route::get('/form/{locale}', [LocalizationController::class, "setLocale"])->name('setLocale');
// Route::get('/form/{locale}', 'App\Http\Controllers\LocalizationController@index');
Route::get('/test-email-create','TestEmailJobController@createEmail');
Route::post('/test-email-send','TestEmailJobController@sendEmail')->name('send.email');