<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DocFolder extends Model
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
        'name',
        'description'
    ];

    public function church()
    {
        return $this->hasOne(\App\Models\Church::class, 'id', 'idChurch_fk');
    }

    public function files()
    {
        return $this->hasMany(\App\Models\DocFile::class, 'idFolder_fk', 'id');
    }
}
