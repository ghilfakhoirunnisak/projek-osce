<?php

namespace App\Models;

use DateTimeInterface;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MahasiswaJadwal extends Model
{
    use HasFactory;

    protected $table = 'mahasiswa_jadwal';
    protected $primaryKey = 'id_mahasiswa_jadwal';
    public $incrementing = true;
    protected $keyType = 'int';
    protected $fillable = [
        'id_jadwal',
        'nim',
        'id_station',
        'id_penguji',
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
