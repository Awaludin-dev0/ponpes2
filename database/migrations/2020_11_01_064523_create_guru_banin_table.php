<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGuruBaninTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('guru_banin', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id');;
            $table->integer('kelas_banin_id');
            $table->integer('tahun_ajaran_id');
            $table->enum('semester', ['ganjil', 'genap'])->default('ganjil');
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
        Schema::dropIfExists('guru_banin');
    }
}
