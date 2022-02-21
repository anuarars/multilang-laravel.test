<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMediabanksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mediabanks', function (Blueprint $table) {
            $table->id();
            $table->string('description');
            $table->string('youtube')->nullable();
            $table->integer('project_id')->nullable();
            $table->integer('event_id')->nullable();
            $table->integer('expert_id')->nullable();
            $table->timestamps();
        });

        // Schema::create('mediabank_project', function (Blueprint $table) {
        //     $table->id();
        //     $table->integer('project_id');
        //     $table->integer('mediabank_id');
        //     $table->timestamps();
        // });

        // Schema::create('event_mediabank', function (Blueprint $table) {
        //     $table->id();
        //     $table->integer('event_id');
        //     $table->integer('mediabank_id');
        //     $table->timestamps();
        // });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('mediabanks');
    }
}
