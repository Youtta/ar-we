<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $table = 'pm_categories';
    protected $fillable = [
        'language_id',
        'name',
        'image',
        'description',
        'sort',
        'status'
    ];

    public function languages() {
        return $this->belongsTo('App\Models\Language','language_id');
    }

     public function products(){
         return $this->hasMany('App\Models\Product','category_id');
     }
}
