<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;

    protected $fillable = [
        'first_name',
        'user_id',
        'last_name',
        'email',
        'phone',
        'address',
        'city',
        'company',
        'website',
        'facebook',
        'image',
    ];

    public function name(){
        return $this->first_name . ' ' . $this->last_name;
    }

    public function orders(){
        return $this->hasMany(Order::class);
    }
}


