<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\Storage;

#[Fillable(['name', 'address', 'photo', 'phone'])]
class Warehouse extends Model
{
    use SoftDeletes;

    public function products()
    {
        return $this->belongsToMany(Product::class, 'warehouse_products')->withPivot('stock')->withTimestamps();
    }

    public function getPhotoAttribute($value)
    {
        if ($value) {
            return null;
        }

        return url(Storage::url($value));
    }
}
