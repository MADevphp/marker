<?php

namespace App\Http\Controllers;

use App\Events\MessageSent;
use App\Http\Resources\ChatResource;
use App\Models\Message;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ChatController extends Controller
{
    public function fetchMessages($recipient_id)
    {
        return $this->response(ChatResource::collection(auth()
            ->user()
            ->chats()
            ->where('recipient_id', $recipient_id)
            ->get()));
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

