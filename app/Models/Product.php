<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'name',
        'price',
        'description',
        'tags',
        'categories_id'
    ];

    //?Relations

    //?Galleri
    public function galleries(){
        return $this->hasMany(ProductGallery::class, 'products_id','id');
    }

    //?Category
    public function category(){
        return $this->belongsTo(ProductCategory::class , 'categories_id','id');
    }
}
