<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Message;
use Illuminate\Http\Request;

class MessageController extends Controller
{
    public function store(Request $request)
    {
        $message = new Message;
        $message->session_id = 1;
        $message->body = $request->body;
        $message->save();

        return response('Lekker man man bro');
    }
}
