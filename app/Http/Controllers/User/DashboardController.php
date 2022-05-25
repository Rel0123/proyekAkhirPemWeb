<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Calon;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    public function index(){
        return view('user.beranda');
    }
	
	public function exitPage(){
        return view('user.exit');
    }
	
	public function voteView()
	{
		$userId = Auth::id();
		$user = User::find($userId);
		$calons = Calon::all();
	
		if(($user->hasVoted) == true)        
			return redirect('user/exit');
		else
			return view('user.vote')->with('calons', $calons); 
	}
	
	public function vote($id){
		$userId = Auth::id();
		$user = User::find($userId);
		$user->update(['hasVoted' => true]);
			
		DB::table('calons')->where('id', $id)->increment('totalVote', 1);
		
		return redirect('user/exit');
	}
	
	//public function logout(){
	//	Session::flush();
     //   Auth::logout();
     //   return redirect('user/login');
//	}
}
