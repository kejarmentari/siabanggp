<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSurveysTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('surveys', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('user_id');
            $table->string('kode')->unique();
            $table->string('latitude');
            $table->string('longitude');
            $table->date('tanggal');
            $table->string('nama_gedung');
            $table->string('pemilik_gedung')->nullable();
            $table->string('fungsi_gedung')->nullable();
            $table->string('klasifikasi_gedung')->nullable();
            $table->string('lokasi_gedung')->nullable();
            $table->integer('jumlah_antai')->default(0);
            $table->integer('ketinggian')->default(0);
            $table->integer('luas_lantai')->default(0);
            $table->integer('luas_lantai_dasar')->default(0);
            $table->integer('luas_tanah')->default(0);
            $table->integer('surat_bukti')->default(1)->comment('1 = sertifikat, 2 = imtn, 3 = bukti lainnya');
            $table->string('pptk')->nullable();
            $table->string('ppk')->nullable();
            $table->string('tahun_anggaran')->nullable();
            $table->boolean('cara_pelaksanaan')->default(1)->comment('0 = swasta, 1 = perusahaan');
            $table->string('youtube_id')->nullable();
            $table->string('foto')->nullable();
            $table->softDeletes();
            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('surveys');
    }
}
