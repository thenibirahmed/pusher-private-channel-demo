<?php

namespace App\Http\Livewire;

use App\Events\PusherTest;
use Livewire\Component;

class Pusher extends Component {

    public $quote, $userId;

    public function getListeners(){
        return [
            "echo-private:divi-channel.{$this->userId},PusherTest" => "handleBroadcastEvent"
        ];
    }

    public function mount() {
        $this->userId = auth()->user()->id;
    }

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
