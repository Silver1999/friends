<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable
        = [
            'username',
            'first_name',
            'last_name',
            'location',
            'name',
            'email',
            'password',
        ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden
        = [
            'password',
            'remember_token',
        ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts
        = [
            'email_verified_at' => 'datetime',
        ];

    public function getName()
    {
        if ($this->first_name && $this->last_name) {
            return "{$this->first_name } {$this->last_name}";
        }
        if ($this->first_name) {
            return $this->first_name;
        }
        return null;
    }

    public function getNameOrUsername()
    {
        return $this->getName()  ?:   $this->username;
    }

    public function getFirstNameOrUsername()
    {
        return $this->first_name ?: $this->username;
    }
}
