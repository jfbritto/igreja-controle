<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    protected $fillable = ['nome','idEstado'];

    public function address()
    {
        return $this->hasOne(\App\Models\Address::class, 'idCity_fk', 'id');
    }

    public function state()
    {
        return $this->hasOne(\App\Models\State::class, 'id', 'idEstado');
    }

    public function events_registration()
    {
        return $this->hasOne(\App\Models\EventRegistration::class, 'idCity_fk', 'id');
    }
}
