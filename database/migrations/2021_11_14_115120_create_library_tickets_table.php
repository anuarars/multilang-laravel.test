<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLibraryTicketsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('library_tickets', function (Blueprint $table) {
            $table->id();
            $table->string('ticket')->nullable();
            $table->string('surname');
            $table->string('name');
            $table->string('email');
            $table->string('phone');
            $table->string('occupation');
            $table->string('position');
            $table->string('locale')->nullable();
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
        Schema::dropIfExists('library_tickets');
    }
}
