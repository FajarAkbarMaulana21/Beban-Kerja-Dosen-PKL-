<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use APP\Models\Subkegiatan;

class penunjang extends Model
{
    use HasFactory;

    protected $fillable = [
        'kode_penunjang','nama_penunjang'
    ];

    public function penunjang(){
        return $this->belongsTo(Subkegiatan::class);
    }


}
