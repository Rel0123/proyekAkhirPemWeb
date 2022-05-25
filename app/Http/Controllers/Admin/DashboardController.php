<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Models\Calon;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    public function __construct()
    {
        /*
         * Uncomment the line below if you want to use verified middleware
         */
        //$this->middleware('verified:admin.verification.notice');
    }

    public function index(){
		$calons = Calon::all();
		return view('admin.dashboard')->with('calons', $calons); 
    }
	
	public function destroy($id) {
		DB::delete('delete from calons where id = ?',[$id]);
		$calons = Calon::all();
		return redirect('admin/dashboard')->with('calons', $calons);
   }
   
   public function add(){
		return view('admin.add');
    }
}
