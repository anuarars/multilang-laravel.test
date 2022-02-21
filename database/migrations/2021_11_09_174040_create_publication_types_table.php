<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePublicationTypesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('publication_types', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
        });
        
        Schema::create('publication_type_translations', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('publication_type_id');
            $table->string('name');
            $table->string('locale')->index();
            // $table->unique(['publication_types_id','locale']);
            // $table->foreign('publication_types_id')->references('id')->on('publication_types')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('publication_types');
    }
}
