<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class DataSiswa extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('data_siswas',function(Blueprint $table){
            $table->id();
            $table->date("tgl_daftar");
            $table->integer("thn_ajaran");
            $table->string("jurusan");
            $table->string("nm_peserta");
            $table->string("nik");
            $table->string("tmp_lahir");
            $table->date("tgl_lahir");
            $table->enum("jk",['l','p']);
            $table->string("agama");
            $table->text("alm_lengkap");
            $table->string("kelurahan");
            $table->string("desa");
            $table->string("kecamatan");
            $table->string("kode_pos");
            $table->string("nm_ayah");
            $table->string("nik_ayah");
            $table->string("pekerjaan_ayah");
            $table->string("pendidikan_ayah");
            $table->string("nm_ibu");
            $table->string("nik_ibu");
            $table->string("pekerjaan_ibu");
            $table->string("pendidikan_ibu");
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
        //
    }
}
