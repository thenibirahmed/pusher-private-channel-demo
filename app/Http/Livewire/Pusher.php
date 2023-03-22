<?php

namespace App\Http\Livewire;

use App\Events\PusherTest;
use Livewire\Component;

class Pusher extends Component {

    public $quote;

    protected $listeners = [
        'echo:divi-channel,PusherTest' => 'handleBroadcastEvent',
    ];

    public function handleBroadcastEvent($data) {
        $this->quote = $data['message'];
    }

    public function broadcastEvent() {
        event( new PusherTest() );
    }

    public function render() {
        return view( 'livewire.pusher' );
    }

}
