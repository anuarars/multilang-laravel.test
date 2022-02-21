<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWorksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('works', function (Blueprint $table) {
            $table->id();
            $table->integer('project_id');
            $table->string('file')->nullable();
            $table->string('year')->nullable();
            $table->timestamps();
        });

        Schema::create('work_translations', function (Blueprint $table) {
            $table->id();
            $table->integer('work_id');
            $table->string('name');
            $table->string('work_name')->nullable();
            $table->text('description');
            $table->string('locale')->index();
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
        Schema::dropIfExists('works');
    }
}
