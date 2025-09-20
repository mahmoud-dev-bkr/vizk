<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Subscription;
use Illuminate\Http\Request;

class AuthController extends Controller
{

    public function viewLogin(Request $request)
    {
        $metaBanner = getMeta('home');
        // Set Meta Home
           metaGenerate($metaBanner);
        return view('front.auth.login');
    }


    public function login(Request $request)
    {
        $credentials = $this->credentials($request);
        if (auth()->guard('web')->attempt($credentials)) {
            return redirect()->route('front.home');
        }
        return redirect()->back()
        ->withErrors(['email' => trans('auth.failed')]);

    }


    public function logout(Request $request)
    {
        auth()->guard('web')->logout();
        return redirect()->route('front.home');
    }


    private function credentials(Request $request)
    {
        return $request->only('email', 'password');
    }
}
