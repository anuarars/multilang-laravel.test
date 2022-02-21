<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProjectsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('projects', function (Blueprint $table) {
            $table->id();
            $table->integer('agenda_id')->nullable();
            $table->string('slug')->nullable()->unique();
            $table->text('award')->nullable();
            $table->text('datetimes')->nullable();
            $table->dateTime('announcement_competition');
            $table->dateTime('announcement_result');
            $table->string('logo')->nullable();
            $table->string('logo_hover')->nullable();
            $table->timestamps();
        });

        Schema::create('project_translations', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('project_id');
            $table->string('name');
            $table->text('description')->nullable();
            $table->text('terms')->nullable();
            $table->text('contacts')->nullable();
            $table->text('quotation')->nullable();
            $table->text('scholarship')->nullable();
            $table->text('other_information')->nullable();
            $table->text('schedule')->nullable();
            $table->string('fee')->nullable();
            $table->string('locale')->index();
            $table->json('extra')->nullable();
            // $table->unique(['project_id','locale']);
            // $table->foreign('project_id')->references('id')->on('projects')->onDelete('cascade');

            $table->timestamps();
        });

        Schema::create('expert_project', function (Blueprint $table) {
            $table->id();
            $table->integer('expert_id');
            $table->integer('project_id');
            $table->string('type')->nullable();
            $table->timestamps();
        });

        Schema::create('project_team', function (Blueprint $table) {
            $table->id();
            $table->integer('team_id');
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
        Schema::dropIfExists('projects');
    }
}
