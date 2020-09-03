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
    return view('auth.login');
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
		Route::post('/admin/delete', 'AdminController@deleteClass');

		//StudentController
		Route::get('/admin/list-student', 'StudentController@listStudent');
		Route::post('/admin/list-student','StudentController@addStudent');
		Route::post('/admin/update/student','StudentController@updateStudent');
		Route::post('/admin/delete/student','StudentController@deleteStudent');


		//TeacherController
		Route::get('/admin/list-teacher','TeacherController@listTeacher');
		Route::post('/admin/list-teacher','TeacherController@listTeacher');
		Route::post('/admin/list-teacher','TeacherController@addTeacher');
		Route::post('/admin/update/teacher','TeacherController@updateTeacher');
		Route::post('/admin/delete/teacher','TeacherController@deleteTeacher');
		
		Route::post('/admin/set/homeroom-teacher' , 'TeacherController@SetHomeroomTeacher');
		Route::get('/admin/list/homeroom-teacher' , 'TeacherController@listHomeroomTeacher');
		Route::post('/admin/update/teacher' , 'TeacherController@updateTeacher');
		Route::post('/admin/delete/teacher' , 'TeacherController@deleteTeacher');
		Route::post('/admin/delete/homeroom-teacher' , 'TeacherController@DeleteHomeRoomTeacher');

		//SavingsController
		Route::get('/admin/list-saving' , 'SavingController@listSaving');
		Route::get('/admin/list-saving/detail/{id}' , 'SavingController@detailSaving');
		Route::get('/admin/list-saving/detail/student/{id}' , 'SavingController@studentSavingDetail');
		Route::post('/admin/saving' , 'SavingController@Saving');

	});

	Route::group(['middleware' => ['role:guru']], function () {
		Route::get('/walikelas/dashboard', 'WalikelasController@detailSaving');
		Route::get('/walikelas/tabungan/detail/{id}','WalikelasController@studentSavingDetail');
		Route::get('/walikelas/tambah-tabungan', 'WalikelasController@TambahTabungan');
		route::get('walikelas/tabungan' , 'WalikelasController@detailSaving');
		Route::post('/walikelas/tambah-tabungan' , 'WalikelasController@SaveTabungan');
			
	});


	

	Route::get('/index', 'HomeController@pageblank');
