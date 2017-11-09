<?php

namespace App\Http\Controllers\Profiles;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProfileDBController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

}
