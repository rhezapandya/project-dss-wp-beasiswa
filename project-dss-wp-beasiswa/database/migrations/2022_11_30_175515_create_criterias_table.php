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
        # Function untuk membuat database baru dengan nama criterias dengan atribut serta tipe data yang diinginkan
        Schema::create('criterias', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->string('tipe');
            $table->integer('bobot');
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
        # Function untuk menghapus database dengan nama criterias jika database dengan nama itu sudah ada
        Schema::dropIfExists('criterias');
    }
};
