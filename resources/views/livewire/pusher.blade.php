<div>
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg mt-10">
            <button wire:click="broadcastEvent" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 m-5 rounded">
                Click Here To Send Pusher Event (Private Channel)
            </button>
            @if ($quote)
                <div class="m-5 font-bold">{!! $quote !!}</div>
            @endif
        </div>
    </div>
</div>
