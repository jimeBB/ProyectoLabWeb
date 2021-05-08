<?php

namespace App\Events;

use Illuminate\Broadcasting\Channel;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;

class ActivityEvent
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    private $type, $user;
    /*public $queue, $connection;*/
    public function __construct ($type, $user) {
        /*$this->queue = 'broadcastable';
        $this->broadcastQueue = 'broadcastable';
        $this->connection = 'beanstalkd';*/
        $this->type = $type;
        $this->user = $user;
    }
    public function broadcastAs () {
        return 'activity-monitor';
    }
    public function broadcastQueue () {
        return 'broadcastable';
    }

    public function broadcastWith () {
        return [
            'id'       => $this->user->id,
            'name'     => $this->user->name,
            'username' => $this->user->username,
            'action'   => ucfirst(strtolower($this->type)),
            'on'       => now()->toDateTimeString(),
        ];
    }

    public function broadcastOn () {
        return new Channel('activities');
    }
}
