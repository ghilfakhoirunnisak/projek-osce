<?php

namespace App\Models;

use DateTimeInterface;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jadwal extends Model
{
    use HasFactory;

    protected $table = 'jadwal';
    protected $primaryKey = 'id_jadwal';
    public $incrementing = true;
    protected $keyType = 'int';
    protected $fillable = [
        'tanggal',
        'waktu_mulai',
        'waktu_akhir',
        'sesi'
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
