<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Chatmessage extends Model
{
    use HasFactory;

    public function room()
    {
        return $this->hasOne(Chatroom::class,'chat_room_id');
    }

    public function user()
    {
        return $this->hasOne(User::class,'user_id');
    }
}
