<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Support extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'idChurch_fk',
        'idUser_fk',
        'isOpen',
        'subject',
        'message',
        'type',
        'answer',
        'answerDate'
    ];
}
