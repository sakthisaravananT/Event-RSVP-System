<div>
    @foreach ($events as $event)
        <div class="p-4 border rounded mb-4 bg-white">
            <h2 class="text-lg font-bold">{{ $event->name }}</h2>
            <p>{{ $event->date }}</p>
            <p>{{ $event->rsvps->count() }} Attendees</p>

            @if ($event->rsvps->where('user_id', auth()->id())->count())
                <button wire:click="withdraw({{ $event->id }})" class="bg-red-500 text-white px-4 py-2 rounded">
                    Withdraw RSVP
                </button>
            @else
                <button wire:click="rsvp({{ $event->id }})" class="bg-green-500 text-white px-4 py-2 rounded">
                    RSVP
                </button>
            @endif
        </div>
    @endforeach
</div>
