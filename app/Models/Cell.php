<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Cell extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'idChurch_fk',
        'isActive',
        'isDeleted',
        'title',
        'description',
        'nameResponsable',
        'phoneResponsable',
        'lat',
        'long',
        'avatar',
    ];

    public function church()
    {
        return $this->hasOne(\App\Models\Church::class, 'id', 'idChurch_fk');
    }
}
