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
        Schema::create('rencana_kegiatan', function (Blueprint $table) {
            $table->id('id_rencana_kegiatan');
            $table->unsignedBigInteger('id_user');
            $table->unsignedBigInteger('id_amalan_yaumi');
            $table->bigInteger('status_rencana_kegiatan');
            $table->softDeletes();
            $table->timestamps();

            $table->foreign('id_user')->references('id')->on('users');
            $table->foreign('id_amalan_yaumi')->references('id_amalan_yaumi')->on('amalan_yaumi');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('rencana_kegiatan');
    }
};
