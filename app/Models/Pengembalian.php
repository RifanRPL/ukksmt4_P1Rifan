<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Pengembalian extends Model
{
    protected $guarded = []; 

    public function petugas(): BelongsTo{
        return $this->belongsTo(User::class, 'petugas_id');
    }

    public function peminjaman(): BelongsTo{
        return $this->belongsTo(Peminjaman::class);
    }
}
