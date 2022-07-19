<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\subpenelitian;

class penelitian extends Model
{
    use HasFactory;

    protected $fillable = [
        'id','kode_penelitian','nama_penelitian'
    ];

    public function penunjang(){
        return $this->hasMany(subpenelitian::class, 'id');
    }
    public function kinerja(){
        return $this->hasOne(KinerjaPenelitian::class, 'id');
    }
}
