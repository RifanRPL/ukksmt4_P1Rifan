<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Pengembalian extends Model
{
    protected $guarded = []; 

    public function petugas(): BelongsTo{
        return $this->belongsTo(User::class, 'petugas_id');
    }

    public function peminjaman(): BelongsTo{
        return $this->belongsTo(Peminjaman::class);
    }

    public function pelanggaran(): HasOne{
        return $this->hasOne(Pelanggaran::class);
    }
}

