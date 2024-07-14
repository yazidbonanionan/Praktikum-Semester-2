<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pembayaran extends Model
{
    use HasFactory;

    protected $table = 'pembayaran';
    protected $fillable = [
        'tanggal', 'jumlah_bayar', 'peminjaman_id',
    ];

    // Define the relationship with Peminjaman
    public function peminjaman()
    {
        return $this->belongsTo(Peminjaman::class);
    }
    public $timestamps = false;
}
