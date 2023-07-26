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
        Schema::table('users', function (Blueprint $table) {
            $table->string('alamat')->nullable();
            $table->string('nomor_telephone')->nullable();
            $table->date('tanggal_lahir')->nullable();
            $table->string('hobi')->nullable();
            $table->boolean('status')->default(false);
            $table->string('golongan_darah')->nullable();
            $table->string('jenis_kelamin')->nullable();
            $table->string('gambar')->nullable();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn(['alamat', 'nomor_telephone', 'tanggal_lahir', 'hobi','status', 'golongan_darah', 'jenis_kelamin','gambar']);
        });
    }

};
