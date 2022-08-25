<?php

namespace App\Http\Controllers;

use App\Http\Services\GateWay;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    protected function register(Request $request)
    {
        $data = $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'phone' => 'required|numeric|digits:9',
            'password' => 'min:6'
        ]);

        $user = User::create($data);
        if ($user){
            Auth::login($user);
            return redirect('/user/admin');
        }

        return view('auth.register');
    }
    protected function login(Request $request)
    {
        $data = $request->only(['email', 'password']);

        if (auth()->attempt($data)){
            return redirect('/user/admin');
        }
        return view('auth.login');
    }
    protected function forgot()
    {
        return view('auth.forgotPassword');
    }

    public function forgotPassword(Request $request){
        $user = User::where('email', $request['email'])
            ->where('phone', $request['phone'])->first();

        if ($user){
            $senMsg = new GateWay();
            $senMsg->sendMessage($user['phone']);
            $request->session()->put('email', $user['email']);
            return view('auth.sendSms');
        }
        return redirect()->back()->with('alert', 'Your email or phone number was not found');
    }
    public function sendSms(Request $request){
        $content = $request->session()->get('content');
        if (Hash::check($request['content'], $content)){
            $email = $request->session()->get('email');
            $user = User::where('email', $email)->first();
            auth()->login($user);
            return redirect('/user/admin')->with('success', 'You are authorized successfully');
        }
        return redirect()->route('forgot')->with('alert', 'Wrong code');
    }
}
