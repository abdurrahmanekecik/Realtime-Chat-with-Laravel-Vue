<?php

namespace App\Http\Controllers;

use App\Models\Chatmessage;
use App\Models\Chatroom;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ChatController extends Controller
{
    public function rooms(Request $request){
        return Chatroom::all();
    }

    public function messages(Request $request, $roomId){
        return Chatmessage::where("chat_room_id", $roomId)
            ->with('user')
            ->orderBy('created_at','DESC')
            ->get();
    }
    public function newMessage(Request $request, $roomId){
        $newMessage = new Chatmessage();
        $newMessage->user_id = Auth::id();
        $newMessage->chat_room_id = $roomId;
        $newMessage->message = $request->message;
        $newMessage->save();

        return $newMessage;
    }
}
