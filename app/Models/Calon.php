<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Calon extends Model
{
    use HasFactory, Notifiable;
	
	protected $fillable = [
        'name',
        'nik',
		'address',
        'status',
		'description',
    ];
}
