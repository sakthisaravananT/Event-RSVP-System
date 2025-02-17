    # Event RSVP System

## Project Description
The Event RSVP System is a Laravel-powered application that allows users to view events, RSVP, withdraw RSVPs, and see attendees in real-time using Livewire. The system includes user authentication, dynamic updates, and a clean UI built with TailwindCSS.

---

## Requirements
- PHP >= 8.1
- Composer
- Laravel 10
- MySQL or SQLite (for the database)
- Node.js and npm (optional, for frontend asset compilation)

---

## Setup Instructions

### Step 1: Clone the Repository
```bash
# Navigate to your desired directory
git clone <repository-url>
cd event-rsvp-system
```

### Step 2: Install Dependencies
1. **Install PHP Dependencies:**
   ```bash
   composer install
   ```

2. **Install Node.js Dependencies (Optional):**
   ```bash
   npm install
   npm run dev  # Compile assets for development
   ```

### Step 3: Configure Environment
1. Copy the `.env.example` file and rename it to `.env`:
   ```bash
   cp .env.example .env
   ```

2. Update the `.env` file with your database credentials:
   ```env
   DB_CONNECTION=mysql
   DB_HOST=127.0.0.1
   DB_PORT=3306
   DB_DATABASE=event_rsvp
   DB_USERNAME=root
   DB_PASSWORD=yourpassword
   ```

### Step 4: Set Up the Application
1. Generate the application key:
   ```bash
   php artisan key:generate
   ```

2. Run the migrations to set up the database:
   ```bash
   php artisan migrate
   ```

3. Seed the database with sample data (optional):
   ```bash
   php artisan db:seed
   ```

### Step 5: Start the Application
Start the Laravel development server:
```bash
php artisan serve
```
The application will be available at: `http://127.0.0.1:8000`

---

## Features
- **Event Listing:** View upcoming events with details like name and date.
- **RSVP Functionality:** Users can RSVP to events.
- **Withdraw RSVP:** Cancel an RSVP.
- **Attendees List:** Display the number of attendees for each event.
- **Real-Time Updates:** Dynamic RSVP updates using Livewire.
- **Validation:** Only logged-in users can RSVP.
- **Responsive Design:** TailwindCSS for a modern and mobile-friendly interface.

---

## File Structure
```
/event-rsvp-system
├── app
│   ├── Http
│   │   ├── Controllers
│   │   │   └── EventController.php
│   │   └── Livewire
│   │       ├── EventList.php
│   │       ├── RSVPHandler.php
│   │       └── AttendeesList.php
│   ├── Models
│   │   ├── Event.php
│   │   └── RSVP.php
│   └── Providers
├── database
│   ├── migrations
│   │   ├── create_events_table.php
│   │   ├── create_users_table.php
│   │   └── create_event_rsvps_table.php
│   └── seeders
│       └── DatabaseSeeder.php
├── resources
│   ├── views
│   │   ├── livewire
│   │   │   ├── event-list.blade.php
│   │   │   ├── rsvp-handler.blade.php
│   │   │   └── attendees-list.blade.php
│   │   └── layouts
│   │       └── app.blade.php
│   └── css
│       └── app.css
├── routes
│   └── web.php
├── .env
├── composer.json
├── package.json
└── webpack.mix.js
```

---

## Troubleshooting
1. **PHP Not Recognized:** Ensure PHP is installed and added to your PATH.
2. **Dependencies Not Found:** Run `composer install` and `npm install`.
3. **Database Issues:** Verify `.env` database credentials and ensure MySQL is running.
4. **Assets Not Loading:** Run `npm run dev` to compile frontend assets.

---

## Testing
Run the unit tests:
```bash
php artisan test
```

---

