<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Post extends Model
{
    use HasFactory;
    protected $fillable = ['judul', 'author', 'isi', 'slug'];
    public function author()
    {
        return $this->belongsTo(User::class, 'author_id');
    }
}
