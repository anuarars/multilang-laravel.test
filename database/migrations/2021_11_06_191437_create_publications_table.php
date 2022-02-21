<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePublicationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('publications', function (Blueprint $table) {
            $table->id();
            $table->integer('agenda_id')->nullable();
            $table->integer('publication_type_id')->nullable();
            $table->boolean('is_main')->default(0);
            $table->string('image')->nullable();
            $table->string('file')->nullable();
            $table->timestamps();
        });

        Schema::create('publication_translations', function (Blueprint $table) {
            $table->increments('id');

            $table->text('title');
            $table->text('content')->nullable();
            $table->string('pdf')->nullable();
            $table->unsignedInteger('publication_id');
            $table->string('locale')->index();
            // $table->unique(['publication_id','locale']);
            // $table->foreign('publication_id')->references('id')->on('publications')->onDelete('cascade');

            $table->timestamps();
        });

        Schema::create('publication_tag', function (Blueprint $table) {
            $table->id();
            $table->integer('publication_id');
            $table->integer('tag_id');
            $table->timestamps();
        });

        Schema::create('expert_publication', function (Blueprint $table) {
            $table->id();
            $table->integer('expert_id');
            $table->boolean('is_main')->default(0);
            $table->integer('publication_id');
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
        Schema::dropIfExists('publications');
    }
}
