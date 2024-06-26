<?php

namespace App\Models\Media;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Media extends Model
{
    use HasFactory;

    protected $table = 'media_galleries';

    protected $fillable = [
        'name',
        'alt_text',
        'images',
    ];
}
