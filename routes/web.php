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



	Route::group(['middleware' => ['role:admin']], function () {
		
		//AdminController
		Route::get('/admin/dashboard','AdminController@index');
		Route::get('/admin/list-class', 'AdminController@listClass');
		Route::post('/admin/list-class', 'AdminController@saveClass');
		Route::post('/admin/update/class', 'AdminController@updateClass');
		Route::post('/admin/delete/class', 'AdminController@deleteClass');

		//StudentController
		Route::get('/admin/list-student', 'StudentController@listStudent');
		Route::post('/admin/list-student', 'StudentController@listStudent');
		Route::post('/admin/list-student','StudentController@addStudent');


		//TeacherController
		Route::get('/admin/list-teacher','TeacherController@listTeacher');
		Route::post('/admin/list-teacher','TeacherController@listTeacher');
		Route::post('/admin/list-teacher','TeacherController@addTeacher');
		Route::post('/admin/update/teacher','TeacherController@updateTeacher');
	});

	Route::group(['middleware' => ['role:guru']], function () {
		Route::get('/guru', function (){ return 'ini guru'; });
		Route::get('/guru/daftar-honor', function (){ return 'ini GAJI guru'; });

		
	});


	

	Route::get('/index', 'HomeController@pageblank');
