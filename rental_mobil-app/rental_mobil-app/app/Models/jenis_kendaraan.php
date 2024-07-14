<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jenis_Kendaraan extends Model
{
    use HasFactory;

    protected $table = 'jenis_kendaraan';

    protected $fillable = [
        'id',
        'nama'
    ];

    public function armada()
    {
        return $this->hasMany(Armada::class, 'jenis_kendaraan_id');
    }

    public $timestamps = false;

}
