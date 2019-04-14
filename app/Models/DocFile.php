<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DocFile extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'idFolder_fk',
        'isActive',
        'isDeleted',
        'name',
        'description',
        'file_name'
    ];

    public function folder()
    {
        return $this->hasOne(\App\Models\Church::class, 'id', 'idFolder_fk');
    }
}
