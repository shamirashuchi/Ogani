<?php

namespace App\Events;

use App\Models\Customer;
use Illuminate\Broadcasting\Channel;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;
use App\Models\User;
use App\Models\Message;



class MessageSent implements ShouldBroadcast
{
    use Dispatchable, InteractsWithSockets, SerializesModels;
    public $customer;
    public $message;
    public $user;
    public $product_id;
    /**
     * Create a new event instance.
     */
    public function __construct(?User $user, ?Customer $customer, Message $message,Message $product_id)
    {
        if($user) {

            $this->user = $user;
            $this->message = $message;
            $this->product_id = $product_id;
        }else {

            $this->customer = $customer;
            $this->message = $message;
            $this->product_id = $product_id;
        }
    }

    /**
     * Get the channels the event should broadcast on.
     *
     * @return array<int, \Illuminate\Broadcasting\Channel>
     */
    public function broadcastOn(): array
    {
        return [
            new PrivateChannel('chat'),
        ];
    }
}
