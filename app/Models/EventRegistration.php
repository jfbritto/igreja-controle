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
        'phone',
        'info'
    ];

    public function church()
    {
        return $this->hasOne(\App\Models\Church::class, 'id', 'idChurch_fk');
    }

    public function event()
    {
        return $this->hasOne(\App\Models\Event::class, 'id', 'idEvent_fk');
    }

    public function city()
    {
        return $this->hasOne(\App\Models\City::class, 'id', 'idCity_fk');
    }

    public function state()
    {
        return $this->hasOne(\App\Models\State::class, 'id', 'idState_fk');
    }
}
