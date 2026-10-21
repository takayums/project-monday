<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

#[Fillable(['name', 'phone', 'sub_total', 'tax_total', 'grand_total', 'merchant_id'])];
class Transaction extends Model
{
    use SoftDeletes;

    public function merchant(){
        return $this->belongsTo(Merchant::class);
    }

    public function transactionProducts(){
        return $this->hasMany(TransactionProduct::class);
    }
}
