use App\Http\Livewire\Events;

Route::get('/', Events::class)->middleware(['auth']);
