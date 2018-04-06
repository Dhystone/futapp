<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use App\Rules\Username;
use App\Rules\RegisteredUsername;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    public function redirectTo(){
        return route('home');
    }

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    protected function validator(array $data)
    {
        return Validator::make($data, [
            'username' => ['required', new Username],
//          'email' => 'required|email',
            'password' => 'required',
          
        ]);
    }    



    public function username()
    {
        return 'username';
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

        return $request->except(['username','_token','remember']);
    
    }

    public function logout(Request $request)
    {
        $this->guard()->logout();

        $request->session()->invalidate();

        return redirect(route('welcome'));
    }
        
}
