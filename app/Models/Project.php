<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    protected $table = 'projects';
    protected $fillable = [
        'name_en',
        'name_kh',
        'name_ch',
        'slug',
        'pdf',
        'type_en',
        'type_kh',
        'type_ch',
        'category',
        'locate_text_en',
        'locate_text_kh',
        'locate_text_ch',
        'locate_link',
        'image'
        
    ];

    protected $casts = [
        'category' => 'array',
    ];

}
