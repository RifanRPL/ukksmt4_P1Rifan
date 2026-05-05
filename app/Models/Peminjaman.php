<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use App\Models\User;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Peminjaman extends Model
{
    protected $guarded = []; 

    public function pengembalian(): HasOne{
        return $this->hasOne(Pengembalian::class);
    }

    public function alat(): BelongsTo{
        return $this->belongsTo(Alat::class);
    }

    public function peminjam(): BelongsTo{
        return $this->belongsTo(User::class, 'peminjam_id');
    }

    public function petugas(): BelongsTo{
        return $this->belongsTo(User::class, 'petugas_id');
    }
}
