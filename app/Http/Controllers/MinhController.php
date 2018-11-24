<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;

class MinhController extends Controller
{
    function testController(){
    	echo "Gọi Controller thành công";
    }
    function khoaHoc($name){
    	echo "Minh đang học ".$name;
    }
    function TraDao(){
    	return redirect()->route('TraDao');

    }
    // Cookie lưu giá trị vào bộ nhớ máy tính với thời gian tùy chọn, Lưu cookie đướng dạng tên cookie , giá trị và thời gian tồn tại của cookie
    function setCookie(Request $request){
    	$response = new Response();
    	//$TenDangNhap = $request->NameLogin;

    	$response -> withCookie('TenDangNhap',$request->NameLogin,1);
    	return $response;
    }
    function getCookie(Request $request){
    	echo "Cookie của bạn là";
    	return $request->Cookie('TenDangNhap');
    }
    function postForm(Request $request){
    	echo  $request->NameLogin;
    	//hoặc $request->input('NameLogin');
    	echo "</br>";
    	if ($request->has('Pass')) {
    	// has('kiểm tra biến đó có giá trị hay ko');
    		echo "Mật khẩu bạn vừa nhập là".$request->Pass;
    	}else 
    		echo "Bạn chưa nhập mật khẩu";
    }
    function goiView(){
    	return View('Minh.testView');
    }
    function getTime($t){
    	return View('time',['t'=>$t]);
    }
    
}
