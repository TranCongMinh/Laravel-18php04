<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests;
class AuthController extends Controller
{
    function AdminLogin(Request $request){
    	
    	$username = $request['NV_name'];
    	$password = $request['NV_matkhau'];
    	//$password = md5($password);
    	//echo $username;
    	//echo $password;
    	//echo $request->NV_makhau;
    	if (Auth::attempt(['loginname' => $username ,'password' => $password])) {
    		echo "Đăng nhập thành công";
    	}
    	else{
    		echo $username;
    		
    		echo "Bạn chưa nhập đúng mật khẩu";
    		//return redirect()->route('GetLogin');
    	}
    }
}
