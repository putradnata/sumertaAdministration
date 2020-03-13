<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePenduduksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('penduduk', function (Blueprint $table) {
            $table->engine = 'InnoDB';

            $table->string('NIK', 16)->primary();
            $table->string('noKK', 16);
            $table->string('nama');
            $table->string('jenisKelamin');
            $table->char('statusPerkawinan', 2);
            $table->string('tempatLahir');
            $table->date('tanggalLahir');
            $table->char('kedudukanKeluarga', 2);
            $table->char('agama', 1);
            $table->string('pendidikanTerakhir');
            $table->string('pekerjaan');
            $table->string('alamatLengkap');
            $table->unsignedBigInteger('idBanjar');
            $table->char('statusPenduduk', 2)->default('A');
            $table->string('namaAyah');
            $table->string('namaIbu');
            $table->char('rumahTanggaMisikin',1)->default('T')->nullable();
            $table->string('kebutuhanKhusus')->default('Tidak')->nullable();
            $table->timestamps();
            $table->softDeletes();

            $table->foreign('idBanjar')->references('id')->on('banjar')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('penduduk');
    }
}
