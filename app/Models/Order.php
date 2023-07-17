<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\Models\Product;
class Order extends Model
{
    use HasFactory;
	
		protected $fillable = [
			'user_id',
			'orderdate',
			'canceleddate',
			'paiddate',
			'preparingdate',
			'finisheddate',
			'posteddate',
			'deliverydate',
			'paidstatus',
			'postagefee',
			'discount',
			'price'
	];
	
	public function user()
	{
		return $this->belongsTo(User::class);
	}
	
	public function products()
	{
		return $this->belongsToMany(Product::class);		
	}
}
