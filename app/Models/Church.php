<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Church extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'isActive',
        'isDeleted',
        'name',
        'email',
        'cnpj',
        'phone',
        'avatar',
        'hash'
    ];
}
