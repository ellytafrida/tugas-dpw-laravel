<?php

namespace App\Models;
use app\Models\Desa;
use app\Models\Kabupaten;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kecamatan extends Model
{
    protected $table = "kecamatan";
    
    function kabupaten(){
        return $this->belongsTo(Kabupaten::class, 'id_kabupaten');
    }

    public function desa(){
        return $this->hasMany(Desa::class,'id_desa');
    }
}