<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SkemaSertifikasi extends Model
{
    protected $table = 'skema_sertifikasis';

    protected $fillable = ['kode_skema', 'nama_skema', 'deskripsi'];   // ← INI

    public function pesertas()
    {
        return $this->hasMany(Peserta::class, 'skema_id');
    }
}