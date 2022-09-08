<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Absensi extends Model
{
    use HasFactory;
    protected $table = 'absensis';
    protected $guard = [];

    public function user()
    {
        return $this->belongsToMany('App\Models\User');
    }

    public function pertemuan()
    {
        return $this->belongsTo('App\Models\Pertemuan');
    }
}
