<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rayon extends Model
{
    use HasFactory;

    protected $fillable = ['nama', 'id_wilayah', 'nip'];

    public function wilayah()
    {
        return $this->belongsTo(Wilayah::class, 'id_wilayah');
    }

    public function siswas()
    {
        return $this->hasMany(Siswa::class, 'id_rayon');
    }
    public function guru()
    {
        return $this->belongsTo(Guru::class, 'nip', 'nip');
    }
}

