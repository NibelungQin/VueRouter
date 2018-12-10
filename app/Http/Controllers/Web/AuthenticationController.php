<?php

namespace App\Http\Controllers\Web;

use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;

/**
 * 第三方登录（GitHub）
 * Class AuthenticationController
 * @package App\Http\Controllers\Web
 */
class AuthenticationController extends Controller
{
    /**
     * @param $account
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function getSocialRedirect($account)
    {
        try {
            return Socialite::with($account)->redirect();
        } catch (\InvalidArgumentException $e) {
            return redirect('/');
        }
    }

    /**
     * @param $account
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function getSocialCallback($account)
    {
        $socialUser = Socialite::with($account)->user();
        $hasUser = User::where(['provider_id'=>$socialUser->id,'provider'=>$account])->first();
        if ($hasUser == null){
            $data = [
                'name' => $socialUser->getName(),
                'email' => $socialUser->getEmail() == '' ? '' : $socialUser->getEmail(),
                'avatar' => $socialUser->getAvatar(),
                'password' => '',
                'provider' => $account,
                'provider_id' => $socialUser->getId(),
            ];
            $user = User::create($data);

            Auth::login($user);
            return redirect('/');
        }
        return redirect('/');
    }
}
