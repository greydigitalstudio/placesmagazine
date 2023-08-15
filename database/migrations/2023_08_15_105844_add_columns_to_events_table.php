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
        Schema::table('events', function (Blueprint $table) {
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
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('events', function (Blueprint $table) {
            $table->dropColumn('endtime');
            $table->dropColumn('occasion');
            $table->dropColumn('min_guests');
            $table->dropColumn('max_guests');
            $table->dropColumn('transfer');
            $table->dropColumn('place');
            $table->dropColumn('checked');
            $table->dropColumn('pg');
            $table->dropColumn('address');
            $table->dropColumn('organizer_logo');
            $table->dropColumn('organizer_name');
        });
    }
};
