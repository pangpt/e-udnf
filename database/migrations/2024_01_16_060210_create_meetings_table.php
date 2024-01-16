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
        Schema::create('meetings', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('invitation_id');
            $table->string('no_agenda_rapat');
            $table->string('penanggung_jawab')->nullable();
            $table->string('keterangan')->nullable();
            $table->string('link_website')->nullable();
            $table->string('file_undangan')->nullable();
            $table->string('file_absensi')->nullable();
            $table->string('file_notulen')->nullable();
            $table->string('file_foto')->nullable();
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
        Schema::dropIfExists('meetings');
    }
};
