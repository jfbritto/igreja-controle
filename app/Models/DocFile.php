<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

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
        'file_name',
        'file_size'
    ];

    public function folder()
    {
        return $this->hasOne(\App\Models\DocFolder::class, 'id', 'idFolder_fk');
    }

    public static function boot()
    {
        parent::boot();

        DocFile::deleted(function($file){
            Storage::delete("docs/{$file->file_name}");
        });
    }

}
