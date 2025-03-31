<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class OrderProductOption extends Model
{
    protected $table = 'order_product_options';
    public $timestamps = false;

    protected $fillable = [
        'order_id',
        'product_id',
        'option_id',
    ];
}
