<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSeriesCastsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('series_casts', function (Blueprint $table) {
            $table->id();
            $table->foreignId('casts_id')->references('id')->on('casts');
            $table->foreignId('series_id')->constrained('series');
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
        Schema::table('series_cast', function (Blueprint $table) {
            $table->dropForeign(['casts_id', 'series_id']);
        });
        Schema::dropIfExists('series_casts');
    }
}
