<?php

namespace PortalDev\Http\Controllers\Auth;

<<<<<<< HEAD
use PortalDev\Models\User;
=======
use PortalDev\User;
>>>>>>> origin/master
use PortalDev\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;

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

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
<<<<<<< HEAD
    protected $redirectTo = '/dashboard';
=======
    protected $redirectTo = '/home';
>>>>>>> origin/master

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
        return Validator::make($data, [
<<<<<<< HEAD
            'nome' => 'required|string|max:40',
            'sobrenome' => 'required|string|max:60',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8|confirmed',
=======
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6|confirmed',
>>>>>>> origin/master
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \PortalDev\User
     */
    protected function create(array $data)
    {
        return User::create([
<<<<<<< HEAD

            'nome' => $data['nome'],
            'sobrenome' => $data['sobrenome'],
            'usuario' => $data['usuario'],
=======
            'name' => $data['name'],
>>>>>>> origin/master
            'email' => $data['email'],
            'password' => bcrypt($data['password']),
        ]);
    }
}
