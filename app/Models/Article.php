<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Category;
class Article extends Model
{
    use HasFactory;

    public function category()
    {
        return  $this->hasOne(Category::class,'id','category_id');
    }

    public function author()
    {
        return $this->hasOne(Author::class,'id','author_id');
    }

    public function test()
    {
        return  $this->belongsTo(Category::class,'category_id');
    }

    public function comments()
    {
        return  $this->hasMany(Comment::class,'article_id','id');
    }
}
