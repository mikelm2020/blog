<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    use HasFactory;

    protected $guarded = ['id', 'created_at', 'updated_at'];

    // Relationships one to many reverse (article-user)
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    // Relationships one to many (article-comments)
    public function comments()
    {
        return $this->hasMany(Comment::class);
    }

    // Relationships one to many reverse (category-article)
    public function category()
    {
        return $this->belongsTo(Category::class);
    }


}
