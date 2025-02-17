public function up()
{
    Schema::create('events', function (Blueprint $table) {
        $table->id();
        $table->string('name');
        $table->timestamp('date');
        $table->timestamps();
    });
}
