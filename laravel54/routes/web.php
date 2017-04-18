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

Route::any('test1', ['uses' => 'StudentController@test1']);



// info 控制器调用的路由
// 方法一
// Route::get('member/info',  'MemberController@info');
// 方法二
// Route::get('member/info',  ['uses' => 'MemberController@info']);
// 路由别名（命名）
// Route::get('member/info', [
// 	'uses' => 'MemberController@info',
// ])->name('info');
// 路由参数和正则验证
// Route::any('member/{id}', ['uses' => 'MemberController@info'])->where('id', '[0-9]+');


/*Route::get('/', function () {
    return view('welcome');
});*/

/*Route::get('/member-center', function () {
	return 'member-center';
});*/


// 5.2 路由别名
/*Route::get('/member-center', ['as' => 'center', function() {
	return route('center');
}]);*/

// 5.4 路由别名
/*Route::get('member/center', function () {
	return route('center');
})->name('center');*/

// 5.4 多路由 match
/*Route::match(['get' , 'post'], '/member' ,function () {
	return 'match route';
});*/

// 5.4 多路由 any
/*Route::any('foo' , function () {
	return 'any route';
});*/






