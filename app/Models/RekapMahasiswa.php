<?php

namespace App\Models;

use DateTimeInterface;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RekapMahasiswa extends Model
{
    use HasFactory;

    protected $table = 'rekap_mahasiswa';
    protected $primaryKey = 'id_rekap_mahasiswa';
    public $incrementing = true;
    protected $keyType = 'int';
    protected $fillable = [
        'id_jadwal',
        'nim',
        'total_rata_rata',
    ];

    public $timestamps = true;

    /**
    * Ubah format created_at dan updated_at menjadi Y-m-d H:i:s
    */
    protected function serializeDate(DateTimeInterface $date): string
    {
        return $date->format('Y-m-d H:i:s');
    }
}
