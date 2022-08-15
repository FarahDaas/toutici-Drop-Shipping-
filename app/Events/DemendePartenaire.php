<?php

namespace App\Events;

use Illuminate\Broadcasting\Channel;
use Illuminate\Queue\SerializesModels;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
// use Illuminate\Contracts\Broadcasting\ShouldBroadcast;

class DemendePartenaire implements ShouldBroadcast
{
    use Dispatchable, InteractsWithSockets, SerializesModels;
    public $msg;
    public $data;
    /**
     * Create a new event instance.
     *
     * @return void
     */
    public function __construct($msg,$data)
    {
        $this->msg=$msg;
        $this->data=$data;
    }

    /**
     * Get the channels the event should broadcast on.
     *
     * @return Channel|array
     */
    public function broadcastOn()
    {
        return new Channel('channel-demande');
    }
     public function broadcastAs(){
        return 'Demande-notification-event';
    }
}
