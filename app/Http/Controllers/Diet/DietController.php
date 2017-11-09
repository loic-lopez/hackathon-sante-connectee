<?php

namespace App\Http\Controllers\Diet;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DietController extends Controller
{

    /**
     * DietController constructor.
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        return view('Diet.diet');
    }
}