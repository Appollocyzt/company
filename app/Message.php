<?php

namespace Prince;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Message extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $table ='message';
    protected $fillable = [
        'name', 
        'email', 
        'subject',
        'message',
    ];

}
