<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/minh', function ()    {
    return view('minh');
}); 
//Test Route
Route::get('Minh/HocLaravel', function(){
	return "Chao cậu";
});
// Truyền biến và đặt điều kiện cho biến
Route::get('Truong/DH/{SDT}', function($SDT){
	echo "Số điện thoại của minh ".$SDT;
})->where(['SDT'=>'[0-9]+']);
// Định danh cho Route
Route::get('EziCoffe',['as' => 'TraDao' , function(){
	echo "Ở Ezi có bán trà đào";
} ]);
//mảng as gán định danh cho route và gọi lại bằng phương thức sau
Route::get('GoiTraDao',function(){
	return redirect()->route('TraDao');
});
//Group Route 
//Nhóm nhiều route nhỏ có cùng tiền tố đỡ mất công viết nhiều =))
Route::group(['prefix' => 'Ezi'],function(){
	Route::get('TraSua',function(){
		echo "ở đây bán trà sữa";
	});
	Route::get('TraDao',function(){
		echo "ở đây bán trà Đào";
	});
	Route::get('Coffe',function(){
		echo "ở đây bán caffe";
	});
	Route::get('SuaTuoi',function(){
		echo "ở đây bán sữa tươi trân châu đường đen";
	});
});
//Gọi Cotroller thông qua route
Route::get('GoiController','MinhController@testController');
//Truyền tham số cho Controller
Route::get('KhoaHoc/{name}','MinhController@khoaHoc');
//Dùng Controller để gọi lại Route Đã được định danh
Route::get('ControllerGoiTraDao','MinhController@TraDao');
//test post form
Route::get('getMinhLogin',function(){
	return view('login');
});
////Gọi trang login
//Đặt định danh cho route vì chỉ có thể gọi định danh của route trên hệ thống
Route::post('MinhLogin',['as'=>'MinhLogin2','uses'=>'MinhController@setCookie']);
Route::get('getCookie','MinhController@getCookie');
//Test Gọi view qua controller
Route::get('GoiView','MinhController@goiView');
// Truyền và Share dữ diệu giữa view 
Route::get('getTime/{t}','MinhController@getTime');
//Share dữ liệu giữa cấc view
View::Share('Minh','HocLaravel');
//Câu hỏi: Tại sao chỉ blade mới share được cho nhau?
// dùng route gọi giao diện
Route::get('Login',function(){
	return View('pages.Login');
});
Route::get('Logout',function(){
	return View('pages.Logout');
});
///////////////////////////////THỰC HÀNH TẠO TRANG LOGIN BẰNG ADMIN LTE/////////////////////////
Route::get('AdminLTE',function(){
	return View('layout.master');
});
//////Gọi Trang login
Route::get('AdminLogin',function(){
	return View('pages.login');
});
//Query Builder
Route::get('getDatabase',function(){
	$users = DB::table('users')->get();
	foreach ($users as $row) {
		foreach ($row as $key => $value) {
			echo $key.":".$value."<br>";
		}
		echo "<hr>";
	}
});
// get với điều kiện
Route::get('GetAdmin',function(){
	$users = DB::table('users')->where('loginname','=','Admin')->get();
	foreach ($users as $row) {
		foreach ($row as $key => $value) {
			echo $key.":".$value."<br>";
		}
		echo "<hr>";
	}
});
//get trường cho trước với điều kiện
Route::get('GetAdmin/getname',function(){
	$users = DB::table('users')->select('id','username')->where('loginname','=','Admin')->get();
	foreach ($users as $row) {
		foreach ($row as $key => $value) {
			echo $key.":".$value."<br>";
		}
		echo "<hr>";
	}
});
// Đổi tên trường bằng hàm raw
Route::get('GetAdmin/getnameraw',function(){
	// $users = DB::table('users')->select(DB::raw('id,username as Hoten'))->where('loginname','=','Admin')->get();
	$users = DB::table('users')->select('username','password')->where('loginname','=','Admin')->get();
	foreach ($users as $row) {
		foreach ($row as $key => $value) {
			echo $value."<br>";
			
		}
		echo "<hr>";
	}
	// $row = mysqli_fetch_array($users);
	// echo $row['username'];
	
});
//Test hàm login
Route::get('GetLogin',function(){
	return View('pages.Login');
});//->name['GetLogin'];
Route::post('AdminLogin',['as' => 'AdminLogin','uses'=>'AuthController@AdminLogin']);
?>



