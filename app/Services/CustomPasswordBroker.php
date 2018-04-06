<?php

namespace App\Services;

use Illuminate\Auth\Passwords\PasswordBroker as BasePasswordBroker;    
use Closure;
use Illuminate\Support\Arr;
use UnexpectedValueException;
use Illuminate\Contracts\Auth\UserProvider;
use Illuminate\Contracts\Auth\PasswordBroker as PasswordBrokerContract;
use Illuminate\Contracts\Auth\CanResetPassword as CanResetPasswordContract;

class CustomPasswordBroker extends BasePasswordBroker    
{    

    public function sendResetLink(array $credentials)
    {
        // First we will check to see if we found a user at the given credentials and
        // if we did not we will redirect back to this current URI with a piece of
        // "flash" data in the session to indicate to the developers the errors.
        $user = $this->getUser($credentials);

        if (is_null($user)) {
            return static::INVALID_USER;
        }

        if(!is_null($user->email)){
        $user->sendPasswordResetNotification(
            $this->tokens->create($user)
        );
    	}

        if(isset($credentials['phone'])){
        $user->sendSmsPasswordResetNotification(
            $this->tokens->create($user),$user->phone
        );
    	}

        return static::RESET_LINK_SENT;
    }

}    