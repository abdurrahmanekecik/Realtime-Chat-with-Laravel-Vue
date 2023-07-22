<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Chatroom;

class ChatRoomSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        ChatRoom::create([
            'name' => "General",
        ]);

        ChatRoom::create([
            'name' => "Ai Talk",
        ]);
    }
}
