<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Peminjaman extends Model
{
    use HasFactory;

    protected $table = 'peminjaman';

    protected $fillable = [
        'id',
        'nama_peminjaman',
        'ktp_peminjam',
        'keperluan_pinjam',
        'mulai',
        'selesai',
        'biaya',
        'armada_id',
        'komentar_peminjam',
        'status_pinjam'
    ];

    public function armada()
    {
        return $this->belongsTo(Armada::class, 'armada_id');
    }

    public $timestamps = false;
}
