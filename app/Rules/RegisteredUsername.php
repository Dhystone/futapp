<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;
use App\User;

class RegisteredUsername implements Rule
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
        $userCheck = User::where('phone', '=', $value)->first();
        if (!empty($userCheck)) {

            return false;

        }elseif(decrypt($userCheck->password)==){

        }
        return true;

        if ($this->auth->attempt([
            'phone'     => $value,
            'password'  => $password
        ], $remember == 1 ? true : false)) {
        return true;
        }else{
            return false;
        }

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
                $preMail=$email[0]; 
                }else{
                $email=explode("+", $email[0]);
                $preMail=$email[0];    
                }
                $preMail=str_replace(".", "",$email[0]);   
            }
        $formattedMail = $preMail."@".$postMail;  

        if ($this->auth->attempt([
            'mail'     => $formattedMail,
            'password'  => $password
        ], $remember == 1 ? true : false)) {
        return true;
        }else{
            return true;
        }

    }else{ 

        return false; 

    }         //
    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        return trans('auth.failed');
    }
}
