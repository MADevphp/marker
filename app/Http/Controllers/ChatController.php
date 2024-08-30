<?php

namespace App\Http\Controllers;

use App\Events\MessageSent;
use App\Models\Message;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ChatController extends Controller
{
    public function fetchMessages($recipient_id)
    {
        $messages = Message::where(function($query) use ($recipient_id) {
            $query->where('user_id', Auth::id())
                ->where('recipient_id', $recipient_id);
        })->orWhere(function($query) use ($recipient_id) {
            $query->where('user_id', $recipient_id)
                ->where('recipient_id', Auth::id());
        })->get();

        return response()->json($messages);
    }

    public function sendMessage(Request $request)
    {
        $message = Message::create([
            'user_id' => Auth::id(),
            'recipient_id' => $request->recipient_id,
            'message' => $request->message,
        ]);

        event(new MessageSent($message));
        return response()->json($message, 201);
    }
}

