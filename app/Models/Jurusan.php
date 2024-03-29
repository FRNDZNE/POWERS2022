<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jurusan extends Model
{
    use HasFactory;
    protected $table = 'jurusans';
    protected $guarded = [];

    public function user()
    {
        return $this->hasMany('App\Models\User');
    }
    public function prodi()
    {
        return $this->hasMany('App\Models\Prodi');
    }

}
