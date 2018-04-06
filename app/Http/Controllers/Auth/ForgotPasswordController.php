<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\SendsPasswordResetEmails;
use App\Rules\Username;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Password;

class ForgotPasswordController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Password Reset Controller
    |--------------------------------------------------------------------------
    |
    | This controller is responsible for handling password reset emails and
    | includes a trait which assists in sending these notifications from
    | your application to your users. Feel free to explore this trait.
    |
    */

    use SendsPasswordResetEmails;

    /**
     * Create a new controller instance.
     *
     * @return void
     */

    protected function sendResetLinkResponse($response)
    {
        return back()->with('status', trans('passwords.username_sent'));
    }

    protected function sendResetLinkFailedResponse(Request $request, $response)
    {
        return back()->withErrors(
            ['username' => trans('passwords.username_user')]
        );
    }

    protected function validateUsername(Request $request)
    {
        return Validator::make($request->only('username'), [
            'username' => ['required', new Username],
         
        ])->validate();
    }

    public function sendResetLinkUsername(Request $request)
    {
        $this->validateUsername($request);

        $response = $this->broker()->sendResetLink(

        $this->credentials($request)

        );

        return $response == Password::RESET_LINK_SENT
                    ? $this->sendResetLinkResponse($response)
                    : $this->sendResetLinkFailedResponse($request, $response);
    }

    protected function credentials(Request $request)
    {

    $value = $request->username;

    $patternMail = "/^[a-z0-9]+([._-][a-z0-9]+)*@([a-z0-9]+([._-][a-z0-9]+))+$/"; 
    $patternPhone = "/^[9|8|7][0-9]{8}$/";
    $preMail="";
    $postMail="";

    if(preg_match($patternPhone, $value)){ 
        $request->request->add(['phone' => $value]);

    }else{

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

            $request->request->add(['email' => $formattedMail]);
    }

        return $request->except(['username','_token']);
    
    }

    public function __construct()
    {
        $this->middleware('guest');
    }

}
