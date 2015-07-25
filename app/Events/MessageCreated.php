<?php

namespace App\Events;

use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use Illuminate\Queue\SerializesModels;

class MessageCreated extends Event implements ShouldBroadcast
{
    use SerializesModels;

    private $username;

    private $message;

    public function __construct($username, $message)
    {
        $this->username = $username;
        $this->message = $message;
    }

    public function broadcastWith()
    {
        return [
            'username' => $this->username,
            'message' => $this->message,
        ];
    }

    public function broadcastOn()
    {
        return ['chat-channel'];
    }
}
