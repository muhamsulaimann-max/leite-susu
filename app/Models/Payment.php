<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Payment extends Model
{
    protected $fillable = [
        'preorder_id', 'metode', 'status', 'bukti_bayar', 'tanggal_bayar',
    ];

    public function preorder(): BelongsTo
    {
        return $this->belongsTo(Preorder::class);
    }
}