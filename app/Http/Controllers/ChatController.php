<?php

namespace App\Http\Controllers;

use App\Events\MessageCreated;
use App\Http\Requests;
use Illuminate\Http\Request;

class ChatController extends Controller
{
    public function index()
    {
        srand(time());
        $username = sprintf('user%06d', rand(1, 100000));
        return view('chat', compact('username'));
    }

    public function sendMessage(Request $request)
    {
        $username = $request->get('username');
        $message = $request->get('message');
        event(new MessageCreated($username, $message));
        return 'message sent';
    }
}
