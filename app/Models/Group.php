<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Group extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function user()
    {
        return $this->belongsToMany('App\Models\User');
    }

    public function mentor()
    {
        return $this->belongsToMany('App\Models\User')->whereHas('role', fn($q) => $q->whereIn('name',['core','commitee','ranger']));
    }

    public function mentee()
    {
        return $this->belongsToMany('App\Models\User')->whereHas('role', fn($q) => $q->where('name','new'));
    }
    
}
