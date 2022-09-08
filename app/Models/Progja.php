<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Progja extends Model
{
    use HasFactory;
    protected $table = 'progjas';
    protected $guarded = [];

    public function divisi()
    {
        return $this->belongsTo('App\Models\Divisi');
    }
}
