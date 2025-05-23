<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Product extends Model
{
//    protected $fillable = [
//
//    ];
    public function filters(): BelongsToMany
    {
        return $this->belongsToMany(Filter::class, 'product_filters');
    }
    public function accessories(): BelongsToMany
    {
        return $this->belongsToMany(Accessory::class);
    }
    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class, 'categories_id');
    }

    public function images(): HasMany
    {
        return $this->hasMany(ProductImage::class, 'product_id', 'id');
    }

    public function options(): BelongsToMany
    {
        return $this->belongsToMany(Option::class);
    }
}
