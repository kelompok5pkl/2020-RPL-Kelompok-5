<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Role;
use App\ClassModel;
use App\User;

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
}
