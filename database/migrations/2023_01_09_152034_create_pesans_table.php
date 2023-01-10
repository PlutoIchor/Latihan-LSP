<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePesansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pesans', function (Blueprint $table) {
            $table->id();
            $table->foreignId('penerima_id',11)->constrained('users');
            $table->foreignId('pengirim_id',11)->constrained('users');
            $table->string('judul_pesan',50);
            $table->text('isi');
            $table->enum('status', ['terkirim', 'dibaca']);
            $table->dateTime('tgl_kirim');
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
        Schema::dropIfExists('pesans');
    }
}
