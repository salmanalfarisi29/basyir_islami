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
        Schema::create('doa', function (Blueprint $table) {
            $table->id('id_doa');
            $table->string('judul_doa');
            $table->longText('ringkasan_doa');
            $table->longText('ringkasan_latin_doa');
            $table->bigInteger('status_doa');
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
        Schema::dropIfExists('doa');
    }
};