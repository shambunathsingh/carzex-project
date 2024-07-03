<?php

namespace App\Models\Post;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\PostCategory\PostCategory;
use Illuminate\Support\Str;

class Post extends Model
{
    use HasFactory;

    protected $table = 'posts';

    protected $fillable = [
        'name',
        'author',
        'description',
        'is_featured',
        'content',
        'time_to_read',
        'layout',
        'status',
        'categories',
        'image',
        'tag',
        'slug',
        'created_at',
        'updated_at'
    ];

    // Define the relationship to PostCategory
    public function postCategory()
    {
        return $this->belongsTo(PostCategory::class);
    }

    // Generate a unique slug for the post
    public static function generateSlug($title)
    {
        $slug = Str::slug($title);
        $originalSlug = $slug;
        $count = 1;

        // Check if the slug already exists and generate a unique one
        while (static::where('slug', $slug)->exists()) {
            $slug = "{$originalSlug}-{$count}";
            $count++;
        }

        return $slug;
    }
}