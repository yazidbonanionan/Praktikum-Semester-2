<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Armada extends Model
{
    use HasFactory;

    protected $table = 'armada';

    protected $fillable = [
        'merk', 'nopol', 'thn_beli', 'deskripsi', 'jenis_kendaraan_id', 'kapasitas_kursi', 'rating',
    ];

    public $timestamps = false; // Nonaktifkan timestamps

    // Relasi dengan jenis_kendaraan jika diperlukan
    public function jenisKendaraan()
    {
        return $this->belongsTo(Jenis_Kendaraan::class, 'jenis_kendaraan_id');
    }
}
