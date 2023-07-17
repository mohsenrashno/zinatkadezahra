<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Order;
use App\Models\Picture;

class Product extends Model
{
    use HasFactory;
	
	protected $fillable = [
		'name',
		'type',
		'size',
		'price'
	];

	public function pictures()
	{
		return $this->hasMany(Picture::class);
	}
	
	public function orders()
	{
		return $this->belongsToMany(Order::class);
	}
}
