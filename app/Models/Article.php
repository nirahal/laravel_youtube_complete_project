<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'user_id',
        'subject',
        'body',
        'likes',
        'comments',
        'isPublished' 
    ];
    public function user(){
        return $this->belongsTo(User::class);
    }
}
