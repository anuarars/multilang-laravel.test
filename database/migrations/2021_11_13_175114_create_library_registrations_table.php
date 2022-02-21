<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLibraryRegistrationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('library_registrations', function (Blueprint $table) {
            $table->id();
            $table->string('ticket');
            $table->string('name');
            $table->string('surname');
            $table->date('date_visit');
            $table->time('time_visit');
            $table->text('books')->nullable();
            $table->boolean('confirmed')->default(0);
            $table->string('locale')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('library_registrations');
    }
}
