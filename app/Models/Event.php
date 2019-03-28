<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'idChurch_fk',
        'haveInscription',
        'isActive',
        'isDeleted',
        'startDate',
        'endDate',
        'title',
        'description',
        'location',
        'nameResponsable',
        'phoneResponsable',
        'value',
        'color',
        'hash'
    ];

    public function church()
    {
        return $this->hasOne(\App\Models\Church::class, 'id', 'idChurch_fk');
    }

    public static function boot()
    {
        parent::boot();

        Event::created(function($event){
            $event->update([
                'hash' => md5($event->id),
            ]);
        });
    }
}
