<?php

namespace App\Http\Controllers;

use App\ClassModel;
use App\Saving;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SavingController extends Controller
{
    public function ListSaving(){
	    $data ['saving'] = Saving::join('homeroom_teacher' , 'homeroom_teacher.class_id' , '=' , 'savings.class_id')
	        ->join('classes' , 'classes.class_id' , 'savings.class_id')
		    ->join('users' , 'users.id' , '=' , 'homeroom_teacher.id_homeroom_teacher')
		    ->select(
			    'savings.*',DB::raw('sum(nominal) as total'),
			    'classes.class_name' , 'classes.class_id as home_class_id',
			    'users.name'
		    )
		    ->groupby('savings.class_id')
		    ->orderBy('savings.class_id' , 'ASC')
		    ->get();
	    return view('admin.daftar-tabungan', $data);
    }

	public function detailSaving($id){
	    $data ['saving'] = Saving::join('students' , 'students.id_student' , '=' , 'savings.id_student')
		    ->select(
			    'savings.*' , DB::raw('sum(nominal) as total'),
			    'students.id_student as std_id' , 'students.name_student'
		    )
		    ->where('savings.class_id' , $id)
		    ->groupBy('savings.id_student')
		    ->orderBy('savings.id_student' , 'ASC')
		    ->get();
	    return view('admin.daftar-tabungan-detail', $data);
    }

	public function studentSavingDetail($id){
		$data ['saving'] = Saving::join('students' , 'students.id_student' , '=' , 'savings.id_student')
			->where('students.id_student', $id)
			->get();
		return view('admin.daftar-tabungan-student', $data);
	}

	public function detailSavingTeacher($id){
		$wl = HomeroomTeacher::whereTeacherId(Auth::user()->id)->first();
	    $data ['saving'] = Saving::join('students' , 'students.id_student' , '=' , 'savings.id_student')
		    ->select(
			    'savings.*' , DB::raw('sum(nominal) as total'),
			    'students.id_student as std_id' , 'students.name_student'
		    )
		    ->where('savings.class_id' , $wl->class_id)
		    ->groupBy('savings.id_student' , 'ASC')
		    ->orderBy('students.name_student' , 'ASC')
		    ->get();
	    return view('guru.daftar-tabungan-detail', $data);
    }

	public function studentSavingDetailTeacher($id){
		$data ['saving'] = Saving::join('students' , 'students.id_student' , '=' , 'savings.id_student')
			->where('students.id_student', $id)
			->get();
		return view('guru.daftar-tabungan-student', $data);
	}

}
