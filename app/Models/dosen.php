<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\Models\kinerjaPenunjang;
use App\Models\KinerjaPenelitian;
class dosen extends Model
{
    use HasFactory;


    protected $fillable = [
        'foto','nama_depan','nama_belakang',
        'email','jabatan','tempat','tgl_lhir',
        'nidn','nip','jenis','gelar_depan',
        'gelar_belakang','jabatan_fungsional',
        'golongan','id_user'
    ];

    public function getfotoAttribute($value){
        return url('storage/', $value);
    }

    public function kinerja_penunjang(){
        return $this->hasMany(kinerjaPenunjang::class, 'id');
    }

    public function kinerja_penelitian(){
        return $this->hasMany(KinerjaPenelitian::class, 'id');
    }
}
