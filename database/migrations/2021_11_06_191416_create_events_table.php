<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEventsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('events', function (Blueprint $table) {
            $table->id();
            $table->integer('type_id')->unsigned()->nullable();

            $table->boolean('is_main')->default(0);
            $table->boolean('status')->default(1);
            $table->boolean('registration_needed')->default(0);
            $table->integer('cost')->nullable();
            $table->string('reg_type')->nullable();
            $table->string('position')->nullable();

            $table->dateTime('date_start')->nullable();
            $table->dateTime('date_end')->nullable();
            
            $table->text('datetimes')->nullable();
            $table->string('stream')->nullable();
            $table->string('other_link')->nullable();
            $table->integer('agenda_id')->nullable();
            $table->string('image')->nullable();
            $table->integer('cost_types')->nullable();
            $table->integer('reg_types')->nullable();
            $table->integer('types')->nullable();
            $table->integer('access')->nullable();
            $table->timestamps();
        });

        Schema::create('event_translations', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('event_id')->unsigned();
            $table->string('locale')->index();

            $table->string('title');
            $table->text('description')->nullable();
            $table->string('city')->nullable();
            $table->text('location')->nullable();
            $table->string('duration')->nullable();

            $table->string('meta_title')->nullable();
            $table->string('meta_keywords')->nullable();
            $table->string('meta_description')->nullable();

            // $table->unique(['event_id', 'locale']);
            // $table->foreign('event_id')->references('id')->on('events')->onDelete('cascade');
        });

        Schema::create('event_tag', function (Blueprint $table) {
            $table->id();
            $table->integer('event_id');
            $table->integer('tag_id');
            $table->timestamps();
        });

        
        Schema::create('event_expert', function (Blueprint $table) {
            $table->id();
            $table->integer('event_id');
            $table->integer('expert_id');
            $table->boolean('is_main')->default(0);
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
        Schema::dropIfExists('events');
    }
}
