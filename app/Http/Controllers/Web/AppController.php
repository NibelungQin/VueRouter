<?php

namespace App\Http\Controllers\Web;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

/**
 * Class AppController
 * @package App\Http\Controllers\Web
 */
class AppController extends Controller
{
    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function getApp()
    {
        return view('app');
    }

    /**
     *
     */
    public function getLogin()
    {
//        Auth::logout();
       return view('login');
    }
}
