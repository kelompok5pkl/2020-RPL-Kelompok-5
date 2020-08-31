<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Role;
use App\ClassModel;
use App\User;
use App\HomeroomTeacher;


class TeacherController extends Controller
{
    
    public function listTeacher()
    {

    	$class = ClassModel::all();
    	$teacher = User::Role('guru')->get();
    	$no = 1;
    	return view('admin.list-teacher', compact(['teacher','no', 'class']));

    }
    public function addTeacher(Request $request)
    {

    	$user = User::whereEmail($request->input('email'))->first();
    	if($user){
    		return back()->withToashError('Email Sudah Digunakan');
    	}else{
    		$create = new User();
    		$create->name 	= $request->input('name');
    		$create->email 	= $request->input('email');
    		$create->password= Hash::make('123');
    		$save  = $create->save();

    		if($save){
    			$role = User::whereId($create->id)->first()->assignRole('guru');
    			if($role){
    				return back()->withSucces('Guru Berhasil Ditambahkan');

    			}else {
    				return back()->withErrors('Gagal Ditambahkan');

    			}
    		}
    	}
    }

    public function updateTeacher(Request $request)
    {
    	$user = User::whereId($request->input('id'))->update(['name' => $request->input('name')]);
	if($user){
		return back()->withToashSucces('Data Berhasil Dirubah');
		}

    }

    public function deleteTeacher(Request $request)
    {
   		User::whereId($request->input('id'))->delete();
   		return back()->withToashSucces('Berhasil Di Hapus');
    }


        public function listHomeroomTeacher(Request $request){
        $teacher = User::Role('guru')->get();
        $class = ClassModel::all();
        $wl = HomeroomTeacher::join('users' , 'users.id' , '=' , 'homeroom_teacher.id_teacher')
            ->join('classes' , 'classes.class_id' , '=' , 'homeroom_teacher.class_id')
            ->join('majors' , 'majors.id_majors' , '=' , 'classes.id_majors')
            ->where('classes.deleted_at' , Null)
            ->get();
        $no = 1;
        return view ('admin.daftar-wali-kelas',compact('teacher','class','wl','no'));
    }
    
    public function SetHomeroomTeacher(Request $request){
        $wl = HomeroomTeacher::whereIdTeacher($request->input('id_teacher'))->first();
        if($wl){
            return back()->withToastError('Gagal, Guru Sudah Menjadi Wali kelas');
        } else {
            $cek_class = HomeroomTeacher::whereClassId($request->input('class_id'))->first();
            if ($cek_class) {
                return back()->withToastError('Kelas telah digunakan');
            } else{
                $create = new HomeroomTeacher();
                $create->id_teacher = $request->input('id_teacher');
                $create->class_id = $request->input('class_id');
                $create->save();
                return back()->withSuccess('Berhasil Menjadikan Wali Kelas');
            }
            
        }
    }

    public function DeleteHomeroomTeacher(Request $request){
        HomeroomTeacher::whereIdHomeroomTeacher($request->input('id'))->delete();
        return back()->withSuccess('Data Berhasil Dihapus');
    }

}
