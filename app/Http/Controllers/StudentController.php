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
    		'nisn' => 'required|min:3|max:10|unique:students',
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

    public function updateStudent (Request $request){
        $update = Student::whereIdStudent($request->input('id'))
            ->update([
                'student_name' => $request->input('student_name'),
                'id_class' => $request->input('id_class')
            ]);
        if($update){
            return back()->withSuccess('Edit Data Berhasil');
        } else {
            return back()->withToastError('Update Gagal');
        }
    }

    public function deleteStudent(Request $request){
        $delete = Student::whereIdStudent($request->input('id'))->delete();
        return back()->withSuccess('Hapus Siswa Berhasil');
    }


    
}
