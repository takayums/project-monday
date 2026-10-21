<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

#[Fillable(['transaction_id', 'quantity_id', 'price', 'sub_total', 'product_id'])];
class TransactionProduct extends Model
{
    use SoftDeletes;

    public function transaction(){
        return $this->belongsTo(Transaction::class);
    }

    public function product(){
        return $this->belongsTo(Product::class);
    }
}
