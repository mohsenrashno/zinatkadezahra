<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
<<<<<<< HEAD
=======
use App\Models\Product;
>>>>>>> detached-head

class Picture extends Model
{
    use HasFactory;
	
	protected $fillable = [
		'product_id',
		'path'
	
	];
<<<<<<< HEAD
=======

	public function product()
	{
		return $this->belongsTo(Product::class);
	}
>>>>>>> detached-head
}
