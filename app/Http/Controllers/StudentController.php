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
    $student= Student::leftjoin('classes' , 'classes.class_id' , '=' , 'students.class_id')
                ->join('majors' , 'majors.id_majors' , '=' , 'classes.id_majors')
                ->where('classes.deleted_at' , '=' , null)
                ->get();

        $no = 1;
        $class = ClassModel::all();
        return view('admin.list-student', compact('student', 'no', 'class'));
    }

    public function addStudent(Request $request){
        $student = Student::whereNisn($request->nisn)->count();
        // dd($request);
        if ($student == 0) {
         $validator = Validator::make($request->all(), [
                'nisn' => 'required|min:3|max:10'

            ]);
            $create = Student::create($request->all());
            return back()->withSuccess('Tambah Siswa Berhasil');
        } else {
            return back()->withWarning('Nisn Sudah Digunakan');
        }

    
        
    }

    public function updateStudent (Request $request){
        $update = Student::whereIdStudent($request->input('id'))
            ->update([
                'class_id' => $request->input('class_id'),
                'name_student' => $request->input('name_student')
                
            ]);
        if($update){
            return back()->withSuccess('Edit Data Berhasil');
        } else {
            return back()->withToastError('Edit Gagal');
        }
    }

    public function deleteStudent(Request $request){
        $student = Student::whereIdStudent($request->input('id'));
        $student->delete();
        return redirect('admin/list-student');
    }
    
    
}
