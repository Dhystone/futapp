<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use App\Rules\Username;
use App\Rules\UniqueUsername;
use Illuminate\Http\Request;
use Illuminate\Auth\Events\Registered;
use App\Traits\CaptchaTrait;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;
    use CaptchaTrait;
    /**
     * Where to redirect users after registration.
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
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {

        $data['captcha'] = $this->captchaCheck();


        return Validator::make($data, [
        //    'name' => 'required|string|max:255',
            'username' => ['required', 'max:100', new Username, new UniqueUsername],  
        //    'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8|confirmed|regex:/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[!@#$%^&]).+$/',
            'g-recaptcha-response'  => 'required',
            'captcha'               => 'required|min:1',
            ],
            [
                'username.required'                   => trans('auth.usernameRequired'),
/*                'name.required'                 => trans('auth.userNameRequired'),
                'first_name.required'           => trans('auth.fNameRequired'),
                'last_name.required'            => trans('auth.lNameRequired'),
                'email.required'                => trans('auth.emailRequired'),
                'email.email'                   => trans('auth.emailInvalid'),
                'password.required'             => trans('auth.passwordRequired'),
                'password.min'                  => trans('auth.PasswordMin'),
                'password.max'                  => trans('auth.PasswordMax'),
                'g-recaptcha-response.required' => trans('auth.captchaRequire'),
                'captcha.min'                   => trans('auth.CaptchaWrong'),
            ]
*/            //'type'=> 'in:L,F,G,T', 
            //Local, Facebook, Gmail, Twiter (1er login)
/*
            'active'=>'boolean',
            'verified'=>'boolean',
            'linked_fb'=>'boolean',   
            'image_url'=>'string|max:255|unique',
            'login_number'=>'integer',
*/            
        ]);
    }

    public function register(Request $request)
    {
        $this->validator($request->all())->validate();

        event(new Registered($user = $this->create($this->credentials($request))));

        $this->guard()->login($user);

        return $this->registered($request, $user)
                        ?: redirect($this->redirectPath());
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
            $request->request->add(['original_email' => $value]);
    }

        return $request->except(['username','_token']);
    
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
        if(!isset($data['phone'])){
        return User::create([
            'original_email' => $data['original_email'],
            'email' => $data['email'],
            'password' => bcrypt($data['password']),
            'first_type_account'=>"local",
            'remember_token'=> str_random(64),
        ]);
        }else{
        return User::create([
            'phone' => $data['phone'],
            'password' => bcrypt($data['password']),
            'first_type_account'=>"local",
            'remember_token'=> str_random(64),            
        
        ]);
        }
    }
}
