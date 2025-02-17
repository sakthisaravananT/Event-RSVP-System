public function up()
{
    Schema::create('users', function (Blueprint $table) {
        $table->id();
        $table->string('email')->unique();
        $table->string('first_name');
        $table->string('last_name');
        $table->string('password');
        $table->timestamps();
    });
}
