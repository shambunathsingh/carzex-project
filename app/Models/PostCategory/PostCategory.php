<?php
// app/Models/PostCategory.php
namespace App\Models\PostCategory;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Post\Post;
use Illuminate\Support\Str;

class PostCategory extends Model
{
    use HasFactory;

    protected $table = 'post_categories';

    protected $fillable = [
        'name',
        'parent_id',
        'description',
        'is_default',
        'icon',
        'order',
        'is_featured',
        'status',
    ];

    public function posts()
    {
        return $this->hasMany(Post::class);
    }

    public function children()
    {
        return $this->hasMany(PostCategory::class, 'parent_id');
    }

    public function parent()
    {
        return $this->belongsTo(PostCategory::class, 'parent_id');
    }
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