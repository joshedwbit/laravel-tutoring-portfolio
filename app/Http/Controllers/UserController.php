<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class UserController extends Controller
{
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
        $formFields = $request->validate([
            'login-email' => 'required',
            'login-password' => 'required',
        ]);

        $credentials = [
            'email' => $formFields['login-email'],
            'password' => $formFields['login-password']
        ];

        if (auth()->attempt($credentials)) {
            $request->session()->regenerate();
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
        $formFields = $request->validate([
            'name' => 'required|min:3|max:10',
            'email' => 'required|email|' . Rule::unique('users', 'email'),
            'password' => 'required|min:6|max:15',
        ]);

        $formFields['password'] = bcrypt($formFields['password']);
        $user = User::create($formFields);
        auth()->login($user);
        $request->session()->regenerate();

        return redirect('/login');
    }
}
