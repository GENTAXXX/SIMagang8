<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLowongansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lowongans', function (Blueprint $table) {
            $table->id('id');
            $table->string('nama');
            $table->text('deskripsi');
            $table->date('tgl_mulai');
            $table->date('tgl_selesai');
            $table->string('lokasi');
            $table->integer('telepon');
            $table->integer('jumlah_mhs');
            $table->string('approval_by');
            $table->unsignedBigInteger('id_skill');
            $table->unsignedBigInteger('id_provinsi');
            $table->unsignedBigInteger('id_kabupaten');
            $table->unsignedBigInteger('id_mitra');
            $table->unsignedBigInteger('id_kategori');
            $table->unsignedBigInteger('id_admin');
            $table->timestamps();
        });

        Schema::table('lowongans', function ($table) {
            $table->foreign('id_mitra')->references('id')->on('mitras');
            $table->foreign('id_kategori')->references('id')->on('kategoris');
            $table->foreign('id_admin')->references('id')->on('admins');
            $table->foreign('id_skill')->references('id')->on('skills');
            $table->foreign('id_provinsi')->references('id')->on('provinsis');
            $table->foreign('id_kabupaten')->references('id')->on('kabupatens');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('lowongans');
    }
}
