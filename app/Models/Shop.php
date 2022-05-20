<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Shop extends Model
{
    use HasFactory;

    protected $table = 'shop';

    protected $fillable = [
        'shop_name',
        'shop_keeper',
        'shop_email',
        'shop_phone',
        'shop_address',
        'shop_website',
        'shop_logo',
    ];
}
