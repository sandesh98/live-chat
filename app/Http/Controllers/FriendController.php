<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FriendController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:airlock');
    }

    public function index()
    {
        $friends = auth()->user()->friends()->get();
        return $friends;
    }
}
