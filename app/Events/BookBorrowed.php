<?php

namespace App\Events;

use App\Models\User;
use Illuminate\Broadcasting\Channel;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;

class BookBorrowed implements ShouldBroadcast
{
    use Dispatchable, InteractsWithSockets, SerializesModels;


    public $studentname;
    public $studentid;
    public $book;

    public function __construct( $studentname, $book, $studentid)
    {
        $this->studentname = $studentname;
        $this->book = $book;
        $this->studentid = $studentid;
    }

    public function broadcastOn()
    {
        return new PrivateChannel('admin-channel');  
    }

    public function broadcastAs()
    {
        return 'book.borrowed';  
    }
}
