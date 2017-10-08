<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Activation;
use Alert;
use Carbon\Carbon;

class EmailVerificationController extends Controller
{
    public function verify($code)
    {
        $activation = Activation::where('code', $code)->get()->last();
        
        $activation->completed = 1;
        $activation->completed_at = Carbon::now();
        $activation->save();
        Alert::success('Your Account have been verified!');
        return redirect("/");
    }
}
