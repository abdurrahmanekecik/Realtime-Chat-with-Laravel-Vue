<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Chatmessage extends Model
{
    use HasFactory;

    public function room()
    {
        return $this->belongsTo(Chatroom::class,'chat_room_id');
    }

    public function user()
    {
        return $this->belongsTo(User::class,'user_id');
    }
}
