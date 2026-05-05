<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Alat extends Model
{
    protected $guarded = []; 

    public function kategori(): BelongsTo{
        return $this->belongsTo(Kategori::class);
    }

    public function peminjamans(): HasMany{
        return $this->hasMany(Peminjaman::class);
    }
}
