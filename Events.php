namespace App\Http\Livewire;

use App\Models\Event;
use App\Models\EventRsvp;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Events extends Component
{
    public $events;

    public function mount()
    {
        $this->events = Event::with('rsvps')->get();
    }

    public function rsvp($eventId)
    {
        if (!Auth::check()) {
            session()->flash('error', 'You must be logged in to RSVP.');
            return;
        }

        EventRsvp::create([
            'user_id' => Auth::id(),
            'event_id' => $eventId,
        ]);

        $this->events = Event::with('rsvps')->get();
        $this->emit('eventUpdated');
    }

    public function withdraw($eventId)
    {
        EventRsvp::where('user_id', Auth::id())
            ->where('event_id', $eventId)
            ->delete();

        $this->events = Event::with('rsvps')->get();
        $this->emit('eventUpdated');
    }

    public function render()
    {
        return view('livewire.events');
    }
}
