namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    protected $fillable = ['email', 'first_name', 'last_name', 'password'];

    public function rsvps() {
        return $this->hasMany(EventRsvp::class);
    }
}
