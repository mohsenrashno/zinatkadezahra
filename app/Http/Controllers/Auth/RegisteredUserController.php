<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Illuminate\View\View;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     */
    public function create(): View
    {
        return view('auth.register');
    }

    /**
     * Handle an incoming registration request.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request): RedirectResponse
    {

        // $correct_phone_sign = substr($request->email, -11, 2);
        // return dd($correct_phone_sign);
        $phone = $request->email;
        $isPhoneNum = false;
        //eliminate every char except 0-9
        $justNums = preg_replace("/[^0-9]/", '', $phone);

        //eliminate leading 1 if its there
        if (strlen($justNums) == 11)
            $justNums = preg_replace("/^0/", '', $justNums);

        //if we have 10 digits left, it's probably valid.
        if (strlen($justNums) == 10)
            $isPhoneNum = true;

        if (!$isPhoneNum)
            return redirect()->back();

        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'max:255', 'unique:' . User::class],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
            'role' => ['required', 'string', 'max:255'],
        ]);
        $new_email = $request->email . "@f.c";

        $user = User::create([
            'name' => $request->name,
            'email' => $new_email,
            'password' => Hash::make($request->password),
            'role' => $request->role,
        ]);

        event(new Registered($user));
        Auth::login($user);

        return redirect(RouteServiceProvider::HOME);
    }
}