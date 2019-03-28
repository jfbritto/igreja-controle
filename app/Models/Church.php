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

    public function members()
    {
        return $this->hasMany(\App\Models\User::class, 'idChurch_fk', 'id');
    }

    public function supports()
    {
        return $this->hasMany(\App\Models\Support::class, 'idChurch_fk', 'id');
    }

    public function events()
    {
        return $this->hasMany(\App\Models\Event::class, 'idChurch_fk', 'id');
    }

    public function events_registration()
    {
        return $this->hasMany(\App\Models\EventRegistration::class, 'idChurch_fk', 'id');
    }

    public static function boot()
    {
        parent::boot();

        Church::created(function($church){
            $church->update([
                'hash' => md5($church->id),
            ]);
        });
    }
}
