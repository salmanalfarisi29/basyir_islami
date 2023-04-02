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
        Schema::create('kutipan', function (Blueprint $table) {
            $table->id('id_kutipan');
            $table->string('judul_kutipan');
            $table->longText('deskripsi_kutipan');
            $table->longText('sumber_kutipan');
            $table->bigInteger('status_kutipan');
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
        Schema::dropIfExists('kutipan');
    }
};