<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Order extends Model
{
    protected $fillable = [
        'fio', 'phone', 'email', 'comment', 'price', 'delivery_type'
    ];
    public function products(): HasMany
    {
        return $this->hasMany(OrderProduct::class, 'order_id');
    }
}
