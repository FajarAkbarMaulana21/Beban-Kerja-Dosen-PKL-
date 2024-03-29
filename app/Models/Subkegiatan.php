<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\penunjang;


class Subkegiatan extends Model
{
    use HasFactory;

    protected $fillable = [
        'id','id_penunjang','subkegiatan'
    ];

    // public function kegiatan(){
    //     return $this->hasMany(penunjang::class, 'id_penunjang', 'id');
    // }

        public function kegiatan(){
            return $this->belongsTo(penunjang::class, 'id_penunjang', 'id');
        }
}
