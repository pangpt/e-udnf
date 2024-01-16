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
$controller_path = 'App\Http\Controllers';

// Route::get('/', function () {
//     return view('auth.loginpage');
// });

Route::get('/login', $controller_path.'\LoginController@loginpage')->name('loginpage');
Route::post('/proseslogin', $controller_path.'\LoginController@proseslogin')->name('proseslogin');

Route::group(['middleware' => 'ceklogin'], function() {
    $controller_path = 'App\Http\Controllers';

    Route::get('/dashboard', $controller_path.'\DashboardController@dashboard')->name('dashboard');
});




