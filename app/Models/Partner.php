<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Partner extends Model
{
    public function partnerType() : BelongsTo
    {
        return $this->belongsTo(PartnerType::class);
    }

    public function partnerProducts() : HasMany
    {
        return $this->hasMany(PartnerProduct::class);
    }
}
