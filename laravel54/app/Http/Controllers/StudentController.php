<?php

namespace App\Http\Controllers;
// 引用数据库命名空间
use Illuminate\Support\Facades\DB;

class StudentController extends Controller
{
	public function test1() {

		// return 'test1';
		/*$students = DB::select('select * from student');
		var_dump($students);*/

		// 新增数据
/*		$bool = DB::insert('insert into student(name,age) values(?, ?)', ['imooc', 19]);
		var_dump($bool);*/

		// 更新数据
/*		$num = DB::update('update student set age = ? where name = ?', [20, 'tom']);
		var_dump($num);*/

		// 删除数据
		// $num = DB::delete('delete from student where id > ?', [1]);
		// var_dump($num);

		// 查询数据
		// $students = DB::select('select * from student');
		// 查询带条件
		// $students = DB::select('select * from student where id > ?', [1]);
		// var_dump($students);
		// dd 检测数据并返回array数据格式
		// dd($students);

	}
}