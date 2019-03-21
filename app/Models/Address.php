<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'cep',
        'idState_fk',
        'idCity_fk',
        'address',
        'number',
        'neighborhood',
        'complement'
    ];

    public function user()
    {
        return $this->hasOne(\App\Models\User::class, 'idAddress_fk', 'id');
    }

    public function state()
    {
        return $this->hasOne(\App\Models\State::class, 'id', 'idState_fk');
    }

    public function city()
    {
        return $this->hasOne(\App\Models\City::class, 'id', 'idCity_fk');
    }
}
