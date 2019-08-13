<?php

namespace App\Models;

use App\Models\Products;
use Illuminate\Database\Eloquent\Model;

class Categories extends Model
{
    protected $table = "categories";

    protected $fillable = [
        'id',
        'name',
    ];

    public function products()
    {
        return $this->hasMany(Products::class, 'categoryId');
    }
}
