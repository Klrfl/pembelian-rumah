<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PembelianRumah extends Model
{
    use HasFactory;
    protected $primaryKey = 'id_transaksi';
    protected $table = 'pembelian_rumah';
    public $timestamps = false;
}
