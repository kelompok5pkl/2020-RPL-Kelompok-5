<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ClassModel;
use App\MajorsModel;

class AdminController extends Controller
{
    public function index()
    {
    	return view('admin.dashboard');
    }
    public function daftartabungan()
    {
    	return view('admin.daftartabungan');
    }

   public function daftarKelas()
    {
        $no = 1;
        $majors = MajorsModel::all();
        $class = ClassModel::join('majors' , 'majors.id_majors' , '=' , 'class.id_majors')
        ->get();
        return view('admin.daftarkelas', compact('class','majors','no'));
    }
    public function saveKelas(Request $request)
    {
    	$insert = new ClassModel();
    	$insert->class_name = $request->input('class_name');
    	$insert->id_majors = $request->input('id_majors');
    	$insert->save();
    	return redirect('admin/daftar-kelas');
    }
    public function Updatekelas(Request $request){
        $class = ClassModel::whereId($request->input('id'))->first();
        $class->class_name = $request->input('');
        $class->id_majors  = $request->input('id_majors');
        $class->save();
        return back();
    }

    public function DeleteKelas(Request $request){
        $class = ClassModel::whereId($request->input('id'))->delete();
        return back();
    }
}
