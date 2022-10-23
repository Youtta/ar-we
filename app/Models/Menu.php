<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    use HasFactory;

    protected $table = "web_menus";

    public function parent(){
        return $this->hasOne('App\Models\Menu','parent_id');
    }


    public function children() {
        return $this->hasMany('App\Models\Menu','parent_id');
    }
}
