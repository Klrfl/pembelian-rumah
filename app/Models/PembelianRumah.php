<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class PembelianRumah extends Model
{
    use HasFactory;
    protected $primaryKey = 'id_transaksi';
    protected $table = 'pembelian_rumah';
    public $timestamps = false;

    public function typeRumah(): HasOne
    {
        return $this->hasOne(TypeRumah::class, 'id_type', 'id_type');
    }
}
