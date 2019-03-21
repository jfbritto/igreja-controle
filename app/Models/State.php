<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class State extends Model
{
    protected $fillable = ['nome','uf'];

    public function address()
    {
        return $this->hasOne(\App\Models\Address::class, 'idState_fk', 'id');
    }

    public function events_registration()
    {
        return $this->hasOne(\App\Models\EventRegistration::class, 'idState_fk', 'id');
    }
}
