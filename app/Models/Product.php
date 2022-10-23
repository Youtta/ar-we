<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $table = 'mf_products';

    protected $fillable = [
        'language_id',
        'parent_id',
        'category_id',
        'image',
        'name',
        'description',
        'status',
        'sort'
    ];

}
