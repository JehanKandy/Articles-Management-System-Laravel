<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Article;

class ArticleImages extends Model
{
    use HasFactory;
    protected $fillable=[
        'images',
        'article_id',
    ];

    public function articles(){
        return $this->belongsTo(Article::class);
    }
}
