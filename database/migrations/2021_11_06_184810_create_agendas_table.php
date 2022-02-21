<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAgendasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('agendas', function (Blueprint $table) {
            $table->id();
            $table->string('image')->nullable();
            $table->string('image_main')->nullable();
            $table->timestamps();
        });

        Schema::create('agenda_translations', function (Blueprint $table) {
            $table->id();

            $table->unsignedInteger('agenda_id');
            $table->string('name');
            $table->text('short_description')->nullable();
            $table->text('description')->nullable();
            $table->string('locale')->index();
            $table->unique(['agenda_id','locale']);

            $table->timestamps();
        });

        Schema::create('agenda_expert', function (Blueprint $table) {
            $table->id();
            $table->integer('agenda_id');
            $table->integer('expert_id');
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
        Schema::dropIfExists('agendas');
    }
}
