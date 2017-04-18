<?php
namespace App\Http\Controllers;
// 引用数据模型
use App\Member;

class MemberController extends Controller
{
	public function info($id) {
		// return 'member-info';
		// return route('info');
		// return 'member-info-id-'.$id;
		// return view('member-info');
		// 调用数据模型
		return Member::getMember();

		/*return view('member/info', [
			'name' => 'Tom',
			'age' => '18'
		]);*/
	}
}
?>