<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class Banner extends Model
{
    protected $fillable = [
        'name',
        'image',
        'link',
    ];

    protected $appends = [
        'path_image',
    ];

    public function getPathImageAttribute()
    {
        return '/uploads/banners/';
    }

    public function getImageAttribute($image)
    {
        return Storage::url($image);
    }
}
