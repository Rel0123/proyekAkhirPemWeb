<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Models\Calon;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Arr;

class DashboardController extends Controller
{
    public function index(){
		$calons = Calon::all();
		$users = User::all();
		
		$totalUser = User::all()->count();
		$totalCalon = Calon::all()->count();
		$totalUserHasVoted = User::where('hasVoted', true)->count();
		
		$electionData = [];
		$electionData = Arr::add($electionData,'totalUser', $totalUser);
		$electionData = Arr::add($electionData,'totalCalon', $totalCalon);
		$electionData = Arr::add($electionData,'totalUserHasVoted', $totalUserHasVoted);
		
		//print_r($electionData);
		
		return view('admin.dashboard')->with('calons', $calons)
									  ->with('electionData', $electionData);
    }
	
	public function destroy($id) {
		DB::delete('delete from calons where id = ?',[$id]);
		$calons = Calon::all();
		return redirect('admin/dashboard')->with('calons', $calons);
    }
   
    public function add(){
		return view('admin.add');
    }
	
	public function edit($id){
		$calon = DB::table('calons')->where('id', $id)->first();
		return view('admin.edit')->with('calon', $calon);
    }
}
