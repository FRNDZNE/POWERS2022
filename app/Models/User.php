<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Laratrust\Traits\LaratrustUserTrait;

class User extends Authenticatable
{
    use LaratrustUserTrait;
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'foto',
        'jurusan_id',
        'prodi_id',
        'gender',
        'tmp_lahir',
        'tgl_lahir',
        'alamat',
        'kontak',
        'angkatan',
        'semester',
        'reason',
        'nim',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function jurusan()
    {
        return $this->belongsTo('App\Models\Jurusan');
    }

    public function prodi()
    {
        return $this->belongsTo('App\Models\Prodi');
    }

    public function role()
    {
        return $this->belongsToMany('App\Models\Role');
    }

    public function permission()
    {
        return $this->belongsToMany('App\Models\Permission');
    }

    public function group()
    {
        return $this->belongsToMany('App\Models\Group');
    }


}
