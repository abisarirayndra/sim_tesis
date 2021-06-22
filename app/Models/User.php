<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'username',
        'email',
        'password',
        'role_id'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function isMahasiswa(){
        if($this->role_id == 1){
            return true;
        }
        return false;
    }
    public function isDosen(){
        if($this->role_id == 2){
            return true;
        }
        return false;
    }
    public function isAdmin(){
        if($this->role_id == 3){
            return true;
        }
        return false;
    }
    public function isKalab(){
        if($this->role_id == 4){
            return true;
        }
        return false;
    }
}
