<?php

namespace App\Events;

use App\Cat;
use Illuminate\Broadcasting\Channel;
use Illuminate\Queue\SerializesModels;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;

class SuperFluffyCatCreated
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    /** @var Cat */
    private $cat;

    /**
     * Create a new event instance.
     *
     * @return void
     */
    public function __construct(Cat $cat)
    {
        $this->cat = $cat;
    }
}
