<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Message;
use Illuminate\Http\Request;

class MessageController extends Controller
{
    public function __construct()
    {
        return $this->middleware('auth:airlock');
    }

    public function index()
    {
        $messages = auth()->user()->messages->where('session_id', 1);
//        dd(auth()->user()->messages->where('session_id', 1));
        return $messages;
    }

    public function store(Request $request)
    {
        $message = new Message();
        $message->session_id = 1;
        $message->body = $request->body;
        $message->save();

        return response('Lekker man man bro');
    }
}
