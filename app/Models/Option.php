<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Option extends Model
{
    public function group(): BelongsTo
    {
        return $this->belongsTo(OptionGroup::class);
    }
}
