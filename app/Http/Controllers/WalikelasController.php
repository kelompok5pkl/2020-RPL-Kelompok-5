<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Saving;
use App\HomeroomTeacher;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\Student;

class WalikelasController extends Controller
{
    public function index()
    {
    	return view('walikelas.dashboard');
    }
    public function detailSaving(){
		$wl = HomeroomTeacher::whereIdTeacher(Auth::user()->id)->first();
	    $data ['saving'] = Saving::join('students' , 'students.id_student' , '=' , 'savings.id_student')
		    ->select(
			    'savings.*' , DB::raw('sum(nominal) as total'),
			    'students.id_student as std_id' , 'students.name_student'
		    )
		    ->where('savings.class_id' , $wl->class_id)
		    ->groupBy('savings.id_student')
		    ->orderBy('students.name_student' , 'ASC')
		    ->get();
	    return view('walikelas.daftar-tabungan-kelas', $data);
    }

	public function studentSavingDetail($id){
		$data ['saving'] = Saving::join('students' , 'students.id_student' , '=' , 'savings.id_student')
			->where('students.id_student', $id)
			->get();
		return view('walikelas.daftar-tabungan-siswa', $data);
	}
	public function TambahTabungan(){
		$wl = HomeroomTeacher::whereIdTeacher(Auth::user()->id)->first();
		$student = Student::whereClassId($wl->class_id)->get();
		return view ('walikelas.tambah-tabungan', compact('student'));	
	}
	public function SaveTabungan(Request $request){
		$wl = HomeroomTeacher::whereIdTeacher(Auth::user()->id)->first();
		$saving = new Saving();
		$saving->class_id = $wl->class_id;
		$saving->id_teacher = Auth::user()->id;
		$saving->id_student = $request->input('id_student');
		$saving->nominal = $request->input('nominal');
		$saving->status = '0';
		$saving->save();
		return back()->withSuccess('Tambah Tabungan Berhasil');
	} 
}
