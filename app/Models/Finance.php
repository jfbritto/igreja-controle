<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Finance extends Model
{
     /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'idChurch_fk',
        'idUser_fk',
        'idAction_fk',
        'comments',
        'type',
        'value',
        'movimentationDate'
  ];
}
