<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\Resetss;

class ResetController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    |  Reset Controller
    |--------------------------------------------------------------------------
    |
    | This controller is responsible for handling  reset requests
    | and uses a simple trait to include this behavior. You're free to
    | explore this trait and override any methods you wish to tweak.
    |
    */

    use Resetss;

    /**
     * Where to redirect users after resetting their .
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;
}
