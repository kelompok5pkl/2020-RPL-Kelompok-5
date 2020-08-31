<?php

namespace App\Http\Controllers;
use App\User;
use Illuminate\Support\Facades\Auth;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    function Roles(){
    	$user = User::with('roles')->whereEmail(Auth::user()->email)->first();
    	$a = $user->roles[0]->id;
    	if ($a == '1') {
    		return redirect('/admin/dashboard');

    	}elseif ($a =='2') {
    		return redirect('/guru/dashboard');
    	}else{
    		return redirect('/login');
    	}
    }
}
