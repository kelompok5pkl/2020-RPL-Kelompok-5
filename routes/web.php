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
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/cek_role', 'AuthController@roles');



	Route::group(['middleware' => ['role:admin01']], function () {
		// Route::get('/admin', function (){ return 'ini admin'; });
		Route::get('/admin/dashboard','AdminController@index');
		Route::get('/admin/daftar-tabungan','AdminController@daftartabungan');
		Route::get('/admin/daftar-kelas', 'AdminController@daftarkelas');
		Route::post('/admin/daftar-kelas', 'AdminController@saveKelas');
		
	});

	Route::group(['middleware' => ['role:guru01']], function () {
		Route::get('/guru', function (){ return 'ini guru'; });
		Route::get('/guru/daftar-honor', function (){ return 'ini GAJI guru'; });

		
	});


	Route::group(['middleware' => ['role:siswa01']], function () {
		Route::get('/siswa', function (){ return 'ini siswa'; });
		
	});

	Route::get('/index', 'HomeController@pageblank');
