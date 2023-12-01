<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    use HasFactory;
    protected $table = 'articles';
    protected $primaryKey = 'id';

    protected $fillable = ['title', 'slug', 'description', 'thumbnail'];

    public function tags()
    {
        return $this->belongsToMany(Tag::class, 'article_tag');
    }
}
