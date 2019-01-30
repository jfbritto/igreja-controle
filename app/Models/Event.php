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
        'color'
  ];
}
