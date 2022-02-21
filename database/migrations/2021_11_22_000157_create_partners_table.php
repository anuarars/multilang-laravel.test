<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePartnersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('partners', function (Blueprint $table) {
            $table->id();
            $table->string('image')->nullable();
            $table->string('image_hover')->nullable();
            $table->string('type');
            $table->string('link')->nullable();
            $table->integer('project_id')->nullable();
            $table->timestamps();
        });

        Schema::create('partner_translations', function (Blueprint $table) {
            $table->id();
            $table->integer('partner_id');
            $table->string('name');
            $table->string('country')->nullable();
            $table->string('locale');
            $table->timestamps();
        });

        
        Schema::create('partner_project', function (Blueprint $table) {
            $table->id();
            $table->integer('partner_id');
            $table->integer('project_id');
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
        Schema::dropIfExists('partners');
    }
}
