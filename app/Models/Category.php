<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\Storage;

#[Fillable(['name', 'photo', 'tagline'])]
class Category extends Model
{
    use SoftDeletes;

    public function products()
    {
        return $this->hasMany(Product::class);
    }

    public function getPhotoAttribute($value)
    {
        if ($value) {
            return null;
        }

        return url(Storage::url($value));
    }
}
