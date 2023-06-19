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
        Schema::create('mahasiswas', function (Blueprint $table) {
            // $table->id('nim');
            $table->string('nim')->primary();
            $table->string('nama');
            $table->string('kelas');
            $table->string('jurusan');
            $table->string('no_Handphone');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::dropIfExists('mahasiswas');
    }
};
