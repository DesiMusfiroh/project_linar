<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMahasiswaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mahasiswa', function (Blueprint $table) {
            $table->increments('id')->unique();
            $table->integer('users_id',4);
            $table->string('nama_lengkap',30);
            $table->string('prodi',30);
            $table->string('fakultas',30);
            $table->string('universitas',30);
            $table->string('jalur_penerimaan',10);
            $table->string('angkatan',4);
            $table->string('no_hp',13);
            $table->string('tanggal_lahir',20);
            $table->string('alamat',255);
            $table->string('file_foto',30);
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
        Schema::dropIfExists('mahasiswa');
    }
}
