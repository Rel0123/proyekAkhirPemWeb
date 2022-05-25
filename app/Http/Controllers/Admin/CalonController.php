<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Calon;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Arr;

class CalonController extends Controller
{
    public function store(Request $request)
    {
		$validatedPhoto = $request->validate([
            'photo' => 'required|file|image|mimes:jpeg,jpg,png|max:2048',
        ]);
		
		$photoFile = $request->file('photo');
		$photoName = $request['nik'] . '.' . $photoFile->getClientOriginalExtension();

		Arr::add($request,'photoName', $photoName);
		Arr::pull($request,'photo');
		
        $validatedData = $request->validate([
            'name' => 	  	 'required|string|max:255',
            'nik' => 	  	 'required|numeric|digits:16|unique:users',
			'photoName'=>    'required|string|max:255',
			'address' =>   	 'required|string|max:255',
            'status' => 	 'required|string|max:255',
			'description' => 'required|string|max:255',
        ]);
		
		DB::table('calons')->insert($validatedData);
		
		$photoFile->move(public_path().'/image/calon', $photoName);
		
        return redirect(route('admin.dashboard'));
    }
	
	public function update(Request $request)
	{		
		$validatedPhoto = $request->validate([
            'photo' => 'required|file|image|mimes:jpeg,jpg,png|max:2048',
        ]);
		
		$photoFile = $request->file('photo');
		$photoName = $request['nik'] . '.' . $photoFile->getClientOriginalExtension();

		Arr::add($request,'photoName', $photoName);
		Arr::pull($request,'photo');
		
        $validatedData = $request->validate([
            'name' => 	  	 'required|string|max:255',
			'photoName'=>    'required|string|max:255',
			'address' =>   	 'required|string|max:255',
            'status' => 	 'required|string|max:255',
			'description' => 'required|string|max:255',
        ]);
		
		Calon::where('nik', $request['nik'])->first()
			->update(['name' => $validatedData['name'], 
					  'photoName' => $validatedData['photoName'],
					  'address' => $validatedData['address'],
					  'status' => $validatedData['status'],
					  'description' => $validatedData['description']
					]);
					  
		$photoFile->move(public_path().'/image/calon', $photoName);
		
        return redirect(route('admin.dashboard'));
	}
}

