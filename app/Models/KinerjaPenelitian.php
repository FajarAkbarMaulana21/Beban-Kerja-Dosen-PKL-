<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KinerjaPenelitian extends Model
{
    use HasFactory;

    protected $fillable = [
        'id_dosen','id_penelitian','nama_kegiatan','filenames','sks_beban_kerja','semester','tahun_akademik','tgl_mulai','tgl_selesai',
        'rekomendasi'
    ];

    public function setFilenamesAttribute($value)
    {
        $this->attributes['filenames'] = json_encode($value);
    }

    public function unsurp(){
        return $this->belongsTo(penelitian::class, 'id_penelitian', 'id');
    }

    public function dosen(){
        return $this->belongsTo(dosen::class, 'id_dosen', 'id');
    }
}
