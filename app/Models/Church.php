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
        'hash',
        'idAddress_fk',
        'lat',
        'long',
        'site_url'
    ];

    public function members()
    {
        return $this->hasMany(\App\Models\User::class, 'idChurch_fk', 'id');
    }

    public function folders()
    {
        return $this->hasMany(\App\Models\DocFolder::class, 'idChurch_fk', 'id');
    }

    public function admins()
    {
        return $this->members()->where('isMember', false)->get();
    }

    public function supports()
    {
        return $this->hasMany(\App\Models\Support::class, 'idChurch_fk', 'id');
    }

    public function events()
    {
        return $this->hasMany(\App\Models\Event::class, 'idChurch_fk', 'id');
    }

    public function cells()
    {
        return $this->hasMany(\App\Models\Cell::class, 'idChurch_fk', 'id');
    }

    public function events_registration()
    {
        return $this->hasMany(\App\Models\EventRegistration::class, 'idChurch_fk', 'id');
    }

    public function address()
    {
        return $this->hasOne(\App\Models\Address::class, 'id', 'idAddress_fk');
    }

    public static function boot()
    {
        parent::boot();

        Church::created(function($church){
            $church->update([
                'hash'      => md5($church->id),
                'site_url' => kebab_case($church->name.' '.$church->address->city->nome)
            ]);
        });
    }
}
