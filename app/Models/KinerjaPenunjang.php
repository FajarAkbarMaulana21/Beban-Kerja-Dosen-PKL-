<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\penunjang;
use App\Models\dosen;

class KinerjaPenunjang extends Model
{
    use HasFactory;

    protected $fillable = [
        'id_dosen','id_subkegiatan','nama_kegiatan','filenames','sks_beban_kerja','semester','tahun_akademik','tgl_mulai','tgl_selesai',
        'rekomendasi'
    ];

    public function setFilenamesAttribute($value)
    {
        $this->attributes['filenames'] = json_encode($value);
    }

    public function unsur(){
        return $this->belongsTo(penunjang::class, 'id_subkegiatan', 'id');
    }

    public function dosen(){
        return $this->belongsTo(dosen::class, 'id_dosen', 'id');
    }
}
