<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Wilayah extends Model
{
    use HasFactory;

    protected $fillable = ['nama'];

    public function rayons()
    {
        return $this->hasMany(Rayon::class, 'id_wilayah');
    }
}
