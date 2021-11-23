<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class M_Product extends Model
{
    use HasFactory;
    protected $table = 'create_products';
    protected $fillable = ['name', 'description', 'stock', 'price', 'category_id'];
}
