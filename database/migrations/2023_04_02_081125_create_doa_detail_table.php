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
        Schema::create('doa_detail', function (Blueprint $table) {
            $table->id('id_doa_detail');
            $table->unsignedBigInteger('id_doa');
            $table->longText('konten_doa');
            $table->longText('konten_latin_doa');
            $table->bigInteger('status_doa');
            $table->softDeletes();
            $table->timestamps();

            $table->foreign('id_doa')->references('id_doa')->on('doa');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('doa_detail');
    }
};
