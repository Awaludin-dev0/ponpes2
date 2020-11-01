<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDataSantriTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('data_santri', function (Blueprint $table) {
            $table->id();
            $table->string('nama_santri', 254)->nullable();
            $table->string('nomor_induk', 30)->nullable();
            $table->enum('jenis_kelamin', ['L', 'P'])->default('L');
            $table->string('tempat_lahir')->nullable();
            $table->date('tanggal_lahir')->nullable();
            $table->string('status_dalam_keluarga', 30)->nullable();
            $table->integer('anak_ke')->nullable();
            $table->text('alamat_santri')->nullable();
            $table->string('nomor_telepon', 40)->nullable();
            $table->string('sekolah_asal', 254)->nullable();
            $table->integer('diterima_diponpes_dikelas')->nullable();
            $table->date('diterima_diponpes_tgl')->nullable();
            $table->string('ayah', 100)->nullable();
            $table->string('ibu', 100)->nullable();
            $table->text('alamat_ortu')->nullable();
            $table->string('nomor_telepon_ortu', 40)->nullable();
            $table->string('pekerjaan_ayah', 100)->nullable();
            $table->string('pekerjaan_ibu', 100)->nullable();
            $table->string('nama_wali', 100)->nullable();
            $table->text('alamat_wali')->nullable();
            $table->string('nomor_telepon_wali', 40)->nullable();
            $table->string('pekerjaan_wali', 100)->nullable();
            $table->boolean('is_active')->default(1);
            $table->boolean('is_deleted')->default(0);
            $table->date('deleted_at')->nullable();
            $table->integer('deleted_by')->default(0);
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
        Schema::dropIfExists('data_santri');
    }
}
