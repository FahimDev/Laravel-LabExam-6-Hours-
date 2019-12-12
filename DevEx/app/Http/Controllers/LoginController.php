<?php

namespace App\Http\Controllers;
use DB;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    //
    public function index(){
		return view('login.index');
	}
	public function verify(Request $req){
		//$users = User::all();
/*		$user = User::where('username', $req->username)
					->where('password', $req->password)
					->get();*/
		$user = DB::table('admins')->where('userName', $req->username)
					->where('password', $req->password)
                    ->first();
                    error_log($req->username);
					error_log(count($user));
					
					//dd($user);
		if(count($user) > 0 ){
			
			$req->session()->put('name', $req->input('username'));
			$req->session()->put('type',$user->type);
			if($user->type == 1)
			{
				return redirect('/homeland');
			}
			elseif($user->type == 0)
			{
				return redirect('/uploadPix');
			}
			elseif($user->type == 2)
			{
				return redirect('/Customer-Deshboard');
			}
			elseif($user->type == 4)
			{
				$req->session()->flash('msg', 'Please wait for your Approval');
			
				return redirect('portal');
			}
			else{
				
				echo "Check your user Type";
			}
			
		}else{
			$req->session()->flash('msg', 'invalid username/password');
			//return view('login.index');
			return redirect('portal');
		}
	}
}
