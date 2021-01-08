<?php

namespace App\Http\Controllers;
//use Illuminate\Support\Facades\Input;
use Illuminate\Http\Request;

use DB;
use Session;

class AdminLoginController extends Controller
{


    public function showloginpage(){

        if(Session::has('adminname')){
       
       return view('Admin.mainpages.adminhome');

        }
        else{

    	return view('Admin.loginpages.login');
        }
    }

    public function loginsubmitfunc(Request $request){

     $username=$request->input('username');
	$password=$request->input('pass');
	//Session::put('adminname',$username);
	$admin_users = DB::table('adminlogin')
                ->where('username', $username)
				->where('password', $password)
                ->get();

     
//      $adminusers = DB::table('adminlogin')->where([
//     ['username', '=', $username],
//     ['password', '=', $pass],
// ])->get();
     
	if(count($admin_users)>0)
	{

     	return view('Admin.mainpages.adminhome');
     }
     else{

        $errmsg="<span style='color:red'>Wrong username or password</span>";

     	return redirect('/adminlogin')->with(['errmsg'=>$errmsg]);
     }

    }

    public function adminlogoutfunc(){


      Session::flush();
      return redirect('/adminlogin');

    }
}

