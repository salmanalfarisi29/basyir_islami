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
        Schema::create('wawasan_islami', function (Blueprint $table) {
            $table->id('id_wawasan_islami');
            $table->string('judul_wawasan_islami');
            $table->longText('ringkasan_wawasan_islami');
            $table->longText('konten_wawasan_islami');
            $table->longText('gambar_wawasan_islami');
            $table->longText('video_wawasan_islami');
            $table->bigInteger('status_wawasan_islami');
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
        Schema::dropIfExists('wawasan_islami');
    }
};
