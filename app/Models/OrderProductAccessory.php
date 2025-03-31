<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class OrderProductAccessory extends Model
{
    protected $table = 'order_product_accessories';
    public $timestamps = false;
    protected $fillable = [
        'order_id',
        'product_id',
        'accessory_id',
    ];
}
