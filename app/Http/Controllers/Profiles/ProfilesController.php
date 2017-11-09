<?php

namespace App\Http\Controllers\Profiles;

use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Validator;
use Auth;

class ProfilesController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(){
        return view('profiles.profiles');
    }

    public function updateDoctor(Request $request)
    {
        $validator = Validator::make($request->all(), ['doctor' => 'required' ]);
        if ($validator->fails())
            return redirect("/profile");
        else
        {
            $user = Auth::user();
            $user->doctor = $request->get('doctor');
            $doctorArray = explode(' ', $user->doctor);
            $user->doctor_username =
                User::where('account_type', 'medecin')
                    ->where('firstname', $doctorArray[0])
                    ->where('lastname', $doctorArray[1])->first()->username;
            $user->save();
            return redirect("/profile");
        }
    }
}
