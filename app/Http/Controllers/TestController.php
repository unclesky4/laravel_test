<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use DB;
use \APP\User;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class TestController extends Controller
{

	public function __construct()
    {
        $this->middleware('auth');
    }

	public function index() {
		echo "<br/>Test Controller";


		//$user = DB::select('select * from users');
		$user = DB::table("users")->get();
		dump($user);
		//echo json_encode($user);

		dump(\App\User::findOrFail(1)->roles()->get());
		//echo \App\User::findOrFail(1)->role;
		//
		dump(User::with('roles')->find(1)->get());

		$tmp = DB::select("select role.* from role left join user_role on user_role.role_id = role.id where user_role.user_id = 1" );
		dump($tmp);


		$tmp1 = DB::select("select permission.* from permission left join role_permission on role_permission.permission_id = permission.id where role_permission.role_id = 1" );
		dump($tmp1);
		die();
	}
}
