<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
//use App\Http\Controllers\Admin\DashboardController;
use Illuminate\Http\Request;
use App\Models\Calon;
use Illuminate\Support\Facades\DB;

class CalonController extends Controller
{
    public function store(Request $request)
    {
		$calon = new Calon;
		
        $validatedData = $request->validate([
            'name' => 	  'required|string|max:255',
            'nik' => 	  'required|numeric|digits:16|unique:users',
			'address' =>   'required|string|max:255',
            'status' => 'required|string|max:255',
			'description' => 'required|string|max:255',
        ]);
		
		
		DB::table('calons')->insert($validatedData);
		
        return redirect(route('admin.dashboard'));
    }
}
