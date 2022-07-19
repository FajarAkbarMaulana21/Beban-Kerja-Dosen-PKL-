<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\penelitian;

class subpenelitian extends Model
{
    use HasFactory;

    protected $fillable = [
        'id','id_penelitian','subkegiatan','angkat_kredit'
    ];

        public function kegiatanp(){
            return $this->belongsTo(penelitian::class, 'id_penelitian', 'id');
        }
}
