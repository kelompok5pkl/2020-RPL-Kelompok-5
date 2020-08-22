<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Student;
use App\ClassModel;
use App\MajorsModel;


class StudentController extends Controller
{
    public function listStudent(){
    $student= Student::join('class' , 'class.id' , '=' , 'students.class_student')
	            ->join('majors' , 'majors.id_majors' , '=' , 'class.id_majors')
		        ->get();

		$no = 1;
		$class = ClassModel::all();
		return view('admin.list-student', compact('student', 'no', 'class'));
    }
    public function addStudent(Request $request){
    	$validator = Validator::make($request->all(), [
    		'nisn' => 'required|min:9|max:9|unique:students',
    	], 	
    	[
    		'nisn.required' => 'NISN Sudah Tersedia',
    	]);
    	if($validator->fails()){
    		return back()->withToastError('NISN Sudah Digunakan');
    	}
    	$create = Student::create($request->all());
    	return back()->withSuccess('Tambah Siswa Berhasil');
    }
    
}
