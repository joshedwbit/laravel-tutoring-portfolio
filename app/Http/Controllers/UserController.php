<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class UserController extends Controller
{
    const PASSCODE_REQUIRED = 'Please enter the passcode. If you have not been given one please contact the site owner.';
    const PASSCODE_INCORRECT = 'The passcode you entered is incorrect. If you have not been given one please contact the site owner.';

    /**
     * points to login page
     *
     * @return void
     */
    public function login()
    {
        return view('login');
    }

    /**
     * Validates a user login
     *
     * @param Request $request
     * @return void
     */
    public function userLogin(Request $request)
    {
        $loginPasscode = config('app.login_passcode');

        $formFields = $request->validate([
            'login-email' => 'required',
            'login-password' => 'required',
            'login-passcode' => 'required|in:' . $loginPasscode,
        ], [
            'login-email.required' => 'The email field is required',
            'login-password.required' => 'The password field is required.',
            'login-passcode.in' => self::PASSCODE_INCORRECT,
            'login-passcode.required' => self::PASSCODE_REQUIRED,
        ]);

        unset($formFields['passcode']);

        $credentials = [
            'email' => $formFields['login-email'],
            'password' => $formFields['login-password']
        ];

        if (auth()->attempt($credentials)) {
            $request->session()->regenerate();
        } else {
            return back()->withErrors([
                'login-password' => 'These credentials do not match our records.'
            ]);
        }

        return redirect('/login');
    }

    /**
     * allows user to logout and redirects to login page
     *
     * @return void
     */
    public function logout()
    {
        auth()->logout();
        return redirect('/login');
    }

    /**
     * points to home page
     *
     * @return void
     * @param Request $request
     */
    public function register(Request $request)
    {
        $registerPassword = config('app.register_passcode');

        $formFields = $request->validate([
            'name' => 'required|min:3|max:10',
            'email' => 'required|email|' . Rule::unique('users', 'email'),
            'password' => 'required|min:6|max:15',
            'passcode' => 'required|in:' . $registerPassword,
        ], [
            'passcode.in' => self::PASSCODE_INCORRECT,
            'passcode.required' => self::PASSCODE_REQUIRED,
        ]);

        unset($formFields['passcode']);

        $formFields['password'] = bcrypt($formFields['password']);
        $user = User::create($formFields);
        auth()->login($user);
        $request->session()->regenerate();

        return redirect('/login');
    }
}
