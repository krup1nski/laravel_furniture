<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Filter extends Model
{
    public function group(): BelongsTo
    {
        return $this->belongsTo(FilterGroup::class);
    }
}
