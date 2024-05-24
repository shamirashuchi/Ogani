<?php

namespace App\Events;

use App\Models\Customer;
use Carbon\Carbon;
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
    public $custom_created_at;
    /**
     * Create a new event instance.
     */
    public function __construct(?User $user, ?Customer $customer, Message $message,Message $product_id,Message $custom_created_at)
    {


            $this->user = $user?$user;
            $this->message = $message;
            $this->product_id = $product_id;
            $this->customer = $customer?$customer;
        $this->custom_created_at = $custom_created_at;
//        }else {
//
//            $this->customer = $customer;
//            $this->message = $message;
//            $this->product_id = $product_id;
//        }
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
