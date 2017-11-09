<?php

namespace App\Http\Controllers\Profiles;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProfilesController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(){
        return view('profiles.profiles');
    }
}
