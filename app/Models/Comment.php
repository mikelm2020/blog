<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;

    protected $guarded = ['id', 'created_at', 'updated_at'];

    // Relationships one to many reverse (comments-user)
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    // Relationships one to many reverse (comments-article)
    public function article()
    {
        return $this->belongsTo(Article::class);
    }

}
