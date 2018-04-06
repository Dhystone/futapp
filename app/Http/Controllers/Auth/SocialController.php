<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Input;

use Laravel\Socialite\Facades\Socialite;

class SocialController extends Controller
{
public function getSocialRedirect($provider)
    {
        $providerKey = Config::get('services.'.$provider);

        if (empty($providerKey)) {
            return view('pages.status')
                ->with('error', trans('socials.noProvider'));
        }

        return Socialite::driver($provider)->redirect();
    }

    public function getSocialHandle($provider)
    {
        if (Input::get('denied') != '') {
            return redirect()->to('login2');
        }

        return redirect()->to('home');
    }
}
