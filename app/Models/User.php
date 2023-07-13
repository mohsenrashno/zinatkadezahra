<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Order;

class User extends Model
{
    use HasFactory;
	
	protected $fillable = [
		'phonenumber',
	    'password',
		'name',
		'address',
		'role' 
	];
	
	public function orders ()
	{
		return $this->hasMany(Order::class);
	}
}