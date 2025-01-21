<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

class Transaksi extends Model
{
    use SoftDeletes;

    protected $table = 'transaksi';
    protected $PrimaryKey = 'id';
    protected $fillable = [
        'id',
        'user_id',
        'mobil_id',
        'nama',
        'ponsel',
        'alamat',
        'lama',
        'tgl_sewa',
        'total',
        'status',
    ];

    public function user(): BelongsTo{
        return $this->belongsTo(User::class);
    }

    public function mobil():BelongsTo{
        return $this->belongsTo(Mobil::class);
    }
}
