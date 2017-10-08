<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Activation;
use Validator;
use App\Pemulung;
use App\Customer;
use Mail;
use App\Mail\EmailVerification;
use Alert;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\RegistersUsers;

/**
 * Class RegisterController
 * @package %%NAMESPACE%%\Http\Controllers\Auth
 */
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
     * Show the application registration form.
     *
     * @return \Illuminate\Http\Response
     */
    public function showRegistrationForm()
    {
        return view('adminlte::auth.register');
    }

    /**
     * Where to redirect users after login / registration.
     *
     * @var string
     */
    protected $redirectTo = '/';

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
            'name'          => 'required|max:255',
            'email'         => 'required|email|max:255|unique:users',
            'gender'        => 'required',
            'phone'         => 'required|max:255',
            'password'      => 'required|min:6|confirmed',
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return User
     */
    protected function create(array $data)
    {
        $fields = [
            'name'          => $data['name'],
            'email'         => $data['email'],
            'password'      => bcrypt($data['password']),
            'phone'         => $data['phone'],
            'gender'        => $data['gender'],
        ];
        $activation = Activation::create([
            'code'    => str_random(20),
        ]);

        $user = User::create($fields);
        $user->activation()->save($activation);
        $customer = Customer::create($fields);
        $customer->user()->save($user); 
        Alert::success('Akun anda telah terdaftar, Silahkan lakukan verifikasi terlebih dahulu sebelum melakukan login');
        Mail::to($user->email)->send(new EmailVerification($activation->code, $customer->name));
        return $user;
    }

    protected function createPorter(array $data)
    {
        $fields = [
            'name'          => $data['name'],
            'email'         => $data['email'],
            'password'      => bcrypt($data['password']),
            'phone'         => $data['phone'],
            'gender'        => $data['gender'],
            'no_identitas'  => $data['no_identitas'],
        ];
        $activation = Activation::create([
            'code'    => str_random(20),
        ]);

        $user = User::create($fields);
        $user->activation()->save($activation);
        $porter = Pemulung::create($fields);
        $porter->user()->save($user); 
        Alert::success('Akun anda telah terdaftar, Silahkan lakukan verifikasi terlebih dahulu sebelum melakukan login');
        Mail::to($user->email)->send(new EmailVerification($activation->code, $porter->name));
        return $user;
    }
}
