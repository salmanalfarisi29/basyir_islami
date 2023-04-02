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
        Schema::create('amalan_yaumi', function (Blueprint $table) {
            $table->id('id_amalan_yaumi');
            $table->string('judul_amalan_yaumi');
            $table->longText('konten_amalan_yaumi');
            $table->longText('gambar_amalan_yaumi');
            $table->longText('video_amalan_yaumi');
            $table->bigInteger('status_amalan_yaumi');
            $table->softDeletes();
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
        Schema::dropIfExists('amalan_yaumi');
    }
};
