<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEventTypesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('event_types', function (Blueprint $table) {
            $table->id();
            $table->string('image')->nullable();
            $table->string('color')->nullable();
            $table->timestamps();
        });

        Schema::create('event_type_translations', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('event_type_id');
            $table->string('title');
            $table->string('locale')->index();
            // $table->unique(['publication_types_id','locale']);
            // $table->foreign('publication_types_id')->references('id')->on('publication_types')->onDelete('cascade');
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
        Schema::dropIfExists('event_types');
    }
}
