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
	$majors = MajorsModel::all();

	return view('admin.daftarkelas', compact('majors'));
}
public function saveKelas(Request $request)
{
	$insert = new ClassModel();
	$insert->class_name = $request->input('class_name');
	$insert->id_majors = $request->input('id_majors');
	$insert->save();
	return redirect('admin/daftar-kelas');
}

}
