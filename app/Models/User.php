<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Order;

class User extends Model
{
<<<<<<< HEAD
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
=======
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
		'address',
		'role' 
    ];

    public function orders ()
	{
		return $this->hasMany(Order::class);
	}

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];
>>>>>>> detached-head
}
