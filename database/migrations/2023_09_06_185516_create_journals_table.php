<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('journals', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('price');
            $table->text('description');
            $table->longText('content')->nullable();
            $table->boolean('recomended')->default(false);
            $table->string('main_photo')->default('placeholder.png');
            $table->boolean('popular')->default(false);
            $table->datetime('event_datetime')->nullable();
            $table->datetime('endtime');
            $table->string('occasion');
            $table->integer('min_guests')->default(0);
            $table->integer('max_guests')->default(150);
            $table->string('transfer');
            $table->string('place');
            $table->boolean('checked');
            $table->boolean('pg');
            $table->text('address');
            $table->text('organizer_logo');
            $table->text('organizer_name');
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
        Schema::dropIfExists('journals');
    }
};
