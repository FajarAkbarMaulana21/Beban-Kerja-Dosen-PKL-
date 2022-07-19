<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class assesor extends Model
{
    use HasFactory;

    protected $fillable = [

        'nip','gelar_depan','nama','gelar_belakang','email','perguruan_tinggi','id_user'
    ];
}
