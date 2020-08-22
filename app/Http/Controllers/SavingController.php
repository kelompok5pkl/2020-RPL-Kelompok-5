<?php

namespace App\Http\Controllers;

use App\ClassModel;
use App\Saving;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SavingController extends Controller
{
    public function ListSaving(){
	    $data ['saving'] = Saving::join('homeroom_teacher' , 'homeroom_teacher.id_class' , '=' , 'savings.id_class')
	        ->join('class' , 'class.id' , 'savings.id_class')
		    ->join('users' , 'users.id' , '=' , 'homeroom_teacher.id_teacher')
		    ->select(
			    'savings.*',DB::raw('sum(nominal) as total'),
			    'class.class_name' , 'class.id as home_id_class',
			    'users.name'
		    )
		    ->groupby('savings.id_class')
		    ->orderBy('savings.id_class' , 'ASC')
		    ->get();
	    return view('admin.daftar-tabungan', $data);
    }

	public function detailSaving($id){
	    $data ['saving'] = Saving::join('students' , 'students.id_student' , '=' , 'savings.id_students')
		    ->select(
			    'savings.*' , DB::raw('sum(nominal) as total'),
			    'students.id_student as std_id' , 'students.name_student'
		    )
		    ->where('savings.id_class' , $id)
		    ->groupBy('savings.id_students')
		    ->orderBy('savings.id_students' , 'ASC')
		    ->get();
	    return view('admin.daftar-tabungan-detail', $data);
    }

	public function studentSavingDetail($id){
		$data ['saving'] = Saving::join('students' , 'students.id_student' , 'savings.id_students')
			->whereIdStudents($id)
			->get();
		return view('admin.daftar-tabungan-student', $data);
	}


}
