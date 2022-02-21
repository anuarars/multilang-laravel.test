<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateExpertsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('experts', function (Blueprint $table) {
            $table->id();
            $table->unsignedTinyInteger('type')->nullable()->comment('0 - Эксперты, 1 - Лауреаты');
            $table->boolean('is_show')->default(1);
            $table->string('image')->nullable();
            $table->string('image_hover')->nullable();
            $table->string('image_dark')->nullable();
            $table->string('cv')->nullable();
            $table->text('victory_year')->nullable();
            $table->text('interview')->nullable()->comment('Текстовое поле формата iframe (youtube) (только для группы лауреаты)');
            $table->text('works_link')->nullable()->comment('Ссылка (только для группы Лауреаты)');
            $table->integer('position')->default(0);
            $table->text('articles')->nullable();
            $table->timestamps();
        });

        Schema::create('expert_translations', function (Blueprint $table) {
            $table->id('id');
            $table->unsignedInteger('expert_id');
            $table->text('name');
            $table->text('jobTitle')->nullable();
            $table->text('description')->nullable();
            $table->string('country')->nullable();
            $table->string('locale')->index();
        });

        Schema::create('expert_news', function (Blueprint $table) {
            $table->id();
            $table->integer('expert_id');
            $table->integer('news_id');
            $table->timestamps();
        });

        Schema::create('expert_language', function (Blueprint $table) {
            $table->id();
            $table->integer('expert_id');
            $table->integer('language_id');
            $table->timestamps();
        });

        Schema::create('expert_university', function (Blueprint $table) {
            $table->id();
            $table->integer('expert_id');
            $table->integer('university_id');
            $table->timestamps();
        });

        Schema::create('degree_expert', function (Blueprint $table) {
            $table->id();
            $table->integer('expert_id');
            $table->integer('degree_id');
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
        Schema::dropIfExists('experts');
    }
}
