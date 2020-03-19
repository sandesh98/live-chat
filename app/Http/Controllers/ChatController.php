<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ChatController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth:airlock');
    }
    public function index()
    {
        return view('home');
    }
}
