<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pertemuan extends Model
{
    use HasFactory;
    protected $table = 'pertemuans';
    protected $guard = [];

    public function absensi(){
        return $this->hasMany('App\Models\Absensi');
    }
}
