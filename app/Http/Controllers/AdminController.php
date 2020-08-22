<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ClassModel;
use App\MajorsModel;
use Illuminate\Support\Facades\Validator;

class AdminController extends Controller
{
    public function index()
    {
    	return view('admin.dashboard');
    }
    
   public function listClass()
    {
        $no = 1;
        $majors = MajorsModel::all();
        $class = ClassModel::join('majors' , 'majors.id_majors' , '=' , 'class.id_majors')
        ->get();
        return view('admin.list-class', compact('class','majors','no'));
    }
    public function saveClass(Request $request)
    {
    	$insert = new ClassModel();
    	$insert->class_name = $request->input('class_name');
    	$insert->id_majors = $request->input('id_majors');
    	$insert->save();
    	return redirect('admin/list-class');
    }
    public function updateClass(Request $request){
      $Validator  = Validator::make($request->all(), [
        'class_name' =>'required|min:8',
        'id_majors' => 'required|max:11|unique:class'],
        ['class_name.required' => 'Class Name Sudah Tersedia',
         'id_majors.required' => 'Id Sudah Tersedia'
      ]);

      if($Validator->fails()){

            return back()->withToastError('class name Sudah digunakan');
        }

      $update = ClassModel::update($request->all());
      return back()->withSucces('Updatekelas berhasil');
    }
    
    // public function Updatekelas(Request $request){
    //     $class = ClassModel::whereId($request->input('id'))->first();
    //     $class->class_name = $request->input('class_name');
    //     $class->id_majors  = $request->input('id_majors');
    //     $class->save();
    //     return back();
    // }

    public function deleteClass(Request $request){
        $class = ClassModel::whereId($request->input('id'))->delete();
        return back();
    }
   
}
