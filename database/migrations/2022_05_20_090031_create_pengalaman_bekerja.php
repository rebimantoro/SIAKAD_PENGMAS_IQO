<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePengalamanBekerja extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pengalaman_bekerja', function (Blueprint $table) {
            $table->unsignedInteger('id_user');
            $table->string('periode');
            $table->string('tempat');
            $table->string('posisi');
            $table->timestamps();

            $table->foreign('id_user')
                ->references('id')
                ->on('data_pegawai')
                ->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pengalaman_bekerja');
    }
}
