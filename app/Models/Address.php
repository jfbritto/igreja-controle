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
}
