<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

#[Fillable(['merchant_id', 'product_id', 'stock', 'warehouse_id'])];
class MerchantProduct extends Model
{
    use SoftDeletes;

    public function product(){
        return $this->belongsTo(Product::class);
    }
public function merchant(){
        return $this->belongsTo(Merchant::class);
    }
public function warehouse(){
        return $this->belongsTo(Warehouse::class);
    }
}
