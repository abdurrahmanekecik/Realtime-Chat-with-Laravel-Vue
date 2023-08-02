<?php

use Illuminate\Support\Facades\Broadcast;
use Illuminate\Support\Facades\Auth;
/*
|--------------------------------------------------------------------------
| Broadcast Channels
|--------------------------------------------------------------------------
|
| Here you may register all of the event broadcasting channels that your
| application supports. The given channel authorization callbacks are
| used to check if an authenticated user can listen to the channel.
|
*/
Broadcast::routes(['middleware' => ['auth:sanctum']]);

Broadcast::channel('App.Models.User.{id}', function ($user, $id) {
    // You can define your own logic here to allow/deny user access to the channel
    return (int) $user->id === (int) $id;
});

Broadcast::channel('Chat.{roomId}', function ($user, $roomId) {
    // Check if the user is authenticated before accessing user properties
    if (Auth::check()) {
        return ['id' => $user->id, 'name' => $user->name];
    }
    return null; // Return null if the user is not authenticated
});
