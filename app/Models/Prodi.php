<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Prodi extends Model
{
    use HasFactory;
    protected $table = 'prodis';
    protected $guarded = [];

    public function jurusan ()
    {
        return $this->belongsTo('App\Models\Jurusan');
    }

    public function user()
    {
        return $this->hasMany('App\Models\User');
    }
}
