<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNewsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('news', function (Blueprint $table) {
            $table->id();
            $table->integer('agenda_id')->nullable();
            $table->boolean('is_main')->default(0);
            $table->text('link')->nullable();
            $table->string('image')->nullable();
            $table->date('date')->nullable();
            $table->boolean('show_on_promo')->default(0);
            $table->boolean('show_as_main')->default(0);
            $table->timestamps();
        });

        Schema::create('news_translations', function (Blueprint $table) {
            $table->id('id');
            $table->integer('news_id');
            $table->string('locale')->index();
            $table->string('title');
            $table->text('content')->nullable();

            $table->timestamps();
        });

        Schema::create('news_tag', function (Blueprint $table) {
            $table->id('id');
            $table->integer('news_id');
            $table->integer('tag_id');

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
        Schema::dropIfExists('news');
    }
}
?>