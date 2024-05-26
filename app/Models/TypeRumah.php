<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TypeRumah extends Model
{
    use HasFactory;
    protected $primaryKey = 'id_type';
    protected $table = 'type_rumah';
    public $timestamps = false;

    protected $fillable = ['type_rumah'];
}
