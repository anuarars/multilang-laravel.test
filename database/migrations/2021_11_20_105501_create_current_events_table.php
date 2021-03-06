<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCurrentEventsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('current_events', function (Blueprint $table) {
            $table->id();
            $table->integer('event_id');
            $table->boolean('is_active')->default(0);
            $table->timestamps();
        });

        Schema::create('current_event_translations', function (Blueprint $table) {
            $table->id();
            $table->unsignedInteger('current_event_id');
            $table->string('description')->nullable();
            $table->string('locale')->index();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('current_events');
    }
}
