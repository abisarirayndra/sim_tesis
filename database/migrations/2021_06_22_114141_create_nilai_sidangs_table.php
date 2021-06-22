<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNilaiSidangsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('nilai_sidangs', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nama');
            $table->string('nrp');
            $table->string('posisi');
            $table->string('nilai_a');
            $table->string('nilai_b');
            $table->string('nilai_c');
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
        Schema::dropIfExists('nilai_sidangs');
    }
}
