<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Pelanggaran extends Model
{
    protected $guarded = []; 

    public function pengembalian(): BelongsTo{
        return $this->belongsTo(Pengembalian::class);
    }
}
