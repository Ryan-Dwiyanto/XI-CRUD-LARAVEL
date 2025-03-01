<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Siswa extends Model
{
    use HasFactory;

    protected $fillable = ['nama', 'nis', 'id_rayon'];

    public function rayon()
    {
        return $this->belongsTo(Rayon::class, 'id_rayon');
    }
}

