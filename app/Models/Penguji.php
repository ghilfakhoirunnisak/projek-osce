<?php

namespace App\Models;

use DateTimeInterface;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Penguji extends Model
{
    use HasFactory;

    protected $table = 'penguji';
    protected $primaryKey = 'id_penguji';
    public $incrementing = true;
    protected $keyType = 'int';
    protected $fillable = [
        'nama_penguji',
        'telp',
        'email',
        'asal_instansi',
        'password'
    ];

    protected $hidden = ['password'];

    public $timestamps = true;

    /**
    * Ubah format created_at dan updated_at menjadi Y-m-d H:i:s
    */
    protected function serializeDate(DateTimeInterface $date): string
    {
        return $date->format('Y-m-d H:i:s');
    }
}
