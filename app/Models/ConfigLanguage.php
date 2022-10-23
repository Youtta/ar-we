<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ConfigLanguage extends Model
{
    use HasFactory;

    protected $table = 'config_languages';

    protected $fillable = [
        'language_id',
        'key',
        'value'
    ];
}
