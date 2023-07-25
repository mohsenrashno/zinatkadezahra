<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Order;
<<<<<<< HEAD
=======
use App\Models\Picture;
>>>>>>> detached-head

class Product extends Model
{
    use HasFactory;
	
	protected $fillable = [
		'name',
		'type',
		'size',
		'price'
	];
<<<<<<< HEAD
=======

	public function pictures()
	{
		return $this->hasMany(Picture::class);
	}
>>>>>>> detached-head
	
	public function orders()
	{
		return $this->belongsToMany(Order::class);
	}
}
