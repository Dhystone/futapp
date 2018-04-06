<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;
use App\User;

class UniqueUsername implements Rule
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

    if(preg_match($patternPhone, $value )){ 
        $userCheck = User::where('phone', '=', $value)->first();
        if (!empty($userCheck)) {

            return false;

        }
        return true;

    }elseif(preg_match($patternMail, $value )){
            
            $email = explode("@", $value );
            $postMail= $email[1];
            if ($email[1]=="yahoo.com") {
                $preMail=$email[0];
            }elseif($email[1]=="yahoo.es"){
                $preMail=$email[0];
            }elseif ($email[1]=="hotmail.com") {
                $preMail=$email[0];
            }elseif ($email[1]=="outlook.com") {
                $preMail=$email[0];
            }elseif ($email[1]=="icloud.com") {
                $preMail=$email[0];
            }else{
                if(!strpos($email[0], "+")){
                $preMail=str_replace(".", "",$email[0]);    
                }else{
                $email=explode("+", $email[0]);
                $preMail=$email[0];    
                }
            }
        $formattedMail = $preMail."@".$postMail;   
        $userCheck = User::where('email', '=', $formattedMail)->first();
        if (!empty($userCheck)) {

            return false;

        }else{

        return true;    

        }
           
    }else{ 

        return false; 

    } 
           //
    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        return trans('validation.uniqueusername');
    }
}
