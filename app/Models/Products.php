<?php

namespace App\Models;

use App\Models\Categories;
use App\Models\Promotions;
use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    protected $table = "products";

    protected $fillable = [
        'id',
        'name',
        'categoryId',
        'basePrice',
    ];

    public function category()
    {
        return $this->hasMany(Categories::class, 'id', 'categoryId');
    }

    public function promotions()
    {
        return $this->hasMany(Promotions::class, 'productId');
    }
}
