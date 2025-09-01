<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Materi extends Model
{
    protected $fillable = [
        'judul',
        'konten',
        'simulasi_id',
    ];

    public function simulasi()
    {
        return $this->belongsTo(Simulasi::class, 'simulasi_id');
    }
}
