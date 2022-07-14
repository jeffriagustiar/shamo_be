<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Transaction extends Model
{
    use HasFactory,SoftDeletes;

    protected $fillable = [
        'users_id',
        'address',
        'paymant',
        'total_price',
        'shipping_price',
        'status',
    ];

    //?Relations

    //?User
    public function user(){
        return $this->belongsTo(User::class,'users_id','id');
    }

    //?Transaction Item
    public function items(){
        return $this->hasMany(TransactionItem::class,'transactions_id','id');
    }
}
