<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;

class Username implements Rule
{
    /**
     * Create a new rule instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Determine if the validation rule passes.
     *
     * @param  string  $attribute
     * @param  mixed  $value
     * @return bool
     */
    public function passes($attribute, $value)
    {
        
    $value = strtolower($value);

    $patternMail = "/^[a-z0-9]+([._-][a-z0-9]+)*@([a-z0-9]+([._-][a-z0-9]+))+$/"; 
    $patternPhone = "/^[9|8|7][0-9]{8}$/";
    $preMail="";
    $postMail="";

    if(preg_match($patternPhone, $value)){ 
        return true;

    }elseif(preg_match($patternMail, $value )){

            return true;
    }else{ 

        return false; 

    } 

    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        return trans('validation.username');
    }
}
