<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Alat extends Model
{
    protected $guarded = []; 

    public function kategori(): BelongsTo{
        return $this->belongsTo(kategori::class);
    }
}
