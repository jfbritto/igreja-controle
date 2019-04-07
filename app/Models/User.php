<?php

namespace App\Models;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'idChurch_fk',
        'idAddress_fk',
        'isAdmin',
        'isMember',
        'isActive',
        'isDeleted',
        'name',
        'birth',
        'sex',
        'email',
        'cpf',
        'phone',
        'avatar',
        'isPendent',
        'info'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function church()
    {
        return $this->hasOne(\App\Models\Church::class, 'id', 'idChurch_fk');
    }

    public function address()
    {
        return $this->hasOne(\App\Models\Address::class, 'id', 'idAddress_fk');
    }

    public function supports()
    {
        return $this->hasMany(\App\Models\Support::class, 'idUser_fk', 'id');
    }
}
