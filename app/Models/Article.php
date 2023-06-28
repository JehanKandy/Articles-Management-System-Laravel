<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    use HasFactory;
    protected $fillable = [
        'add_user',
        'article_name',
        'article_data',
        'cover',
        'tags',
        'created_at',
        'updated_at',
    ];

    
}
