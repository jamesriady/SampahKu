<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Pemulung;
use App\Activation;
use Alert;
use Mail;
use App\Mail\EmailVerification;

class PemulungController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function register(Request $request)
    {
        $this->validate($request, [
            'name'     => 'required|max:255',
            'email'    => 'required|email|max:255|unique:users',
            'password' => 'required|min:6|confirmed',
            'no_identitas' => 'required|max:255',
            'gender'   => 'required',
            'phone'   => 'required',
        ]);

        $pemulung = new Pemulung();
        $pemulung->name = $request->name;
        $pemulung->no_identitas = $request->no_identitas;
        $pemulung->phone = $request->phone;
        $pemulung->gender = $request->gender;
        $user = new User();
        $user->email = $request->email;
        $user->password = bcrypt($request->password);
        $user->save();
        $activation = new Activation();
        $activation->code = str_random(20);
        $activation->save();
        $user->activation()->save($activation);
        $pemulung->save();
        $pemulung->user()->save($user);
        Alert::success('Akun anda telah terdaftar, Silahkan lakukan verifikasi terlebih dahulu sebelum melakukan login');
        Mail::to($user->email)->send(new EmailVerification($activation->code, $pemulung->name));
        return redirect('/');
    }
}
