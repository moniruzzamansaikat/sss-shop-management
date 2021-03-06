<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'name' ,'user_id', 'price', 'quantity', 'category_id', 'description', 'image', 'sold'
    ];

    public function category(){
        return $this->belongsTo(Category::class);
    }
}
