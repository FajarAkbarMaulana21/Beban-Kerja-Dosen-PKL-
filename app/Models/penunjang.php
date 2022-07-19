<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Subkegiatan;
use App\Models\KinerjaPenunjang;

class penunjang extends Model
{
    use HasFactory;

    protected $fillable = [
        'id','kode_penunjang','nama_penunjang'
    ];

    public function penunjang(){
        return $this->hasMany(Subkegiatan::class, 'id');
    }

    public function kinerja(){
        return $this->hasOne(KinerjaPenunjang::class, 'id');
    }
}
