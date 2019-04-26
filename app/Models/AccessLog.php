<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AccessLog extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'idUser_fk',
        'date_log'
    ];

    public $timestamps = false;

    public function user()
    {
        return $this->hasOne(\App\Models\User::class, 'id', 'idUser_fk');
    }

    public static function boot()
    {
        parent::boot();

        AccessLog::created(function($access){
            logger()->stack(['slack'])->info('Usuário ' . $access->user->name . ' entrou!');
        });
    }
}
