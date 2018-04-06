<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

use Illuminate\Auth\Notifications\ResetPassword as ResetPasswordNotification;
use App\Notifications\ResetPasswordSms as ResetPasswordSmsNotification;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'original_email','email', 'phone', 'password','first_type_account', 'remember_token' // not necesary remember_token
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token'];
/*
    public function getNameAttribute()
    {
        return $this->first_name.' '.$this.last_name;
    }
*/
    public function sendPasswordResetNotification($token)
    {
        $this->notify(new ResetPasswordNotification($token));
    }
    public function sendSmsPasswordResetNotification($token,$phone)
    {
        $this->notify(new ResetPasswordSmsNotification($token,$phone));
    }


}
