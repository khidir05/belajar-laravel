<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Post extends Model
{
    use HasFactory;

    protected $fillable = ['judul', 'isi', 'slug', 'category'];
    protected $with = ['author', 'category'];

    // Relationship: A post belongs to an author (User)
    public function author(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    // New relationship: A post belongs to a category
    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class);
    }
}