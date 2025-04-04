<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Treatment extends Model
{
    public function Treatment() : BelongsTo {
        return $this->belongsTo(Patient::class);
    }
}
