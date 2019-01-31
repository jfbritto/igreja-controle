<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class EventRegistration extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'idChurch_fk',
        'idEvent_fk',
        'idCity_fk',
        'idState_fk',
        'isActive',
        'isDeleted',
        'isPaid',
        'name',
        'birth',
        'sex',
        'email',
        'phone'
  ];
}
