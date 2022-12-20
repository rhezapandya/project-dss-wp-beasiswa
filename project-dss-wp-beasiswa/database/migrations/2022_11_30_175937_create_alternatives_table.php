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
        # Function untuk membuat database baru dengan nama alternatives dengan atribut serta tipe data yang diinginkan
        Schema::create('alternatives', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->integer('bobot_k1');
            $table->integer('bobot_k2');
            $table->integer('bobot_k3');
            $table->integer('bobot_k4');
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
        # Function untuk menghapus database dengan nama alternatives jika database dengan nama itu sudah ada
        Schema::dropIfExists('alternatives');
    }
};
