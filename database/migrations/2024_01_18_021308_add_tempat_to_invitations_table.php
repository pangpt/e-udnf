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
        Schema::table('invitations', function (Blueprint $table) {
            //
            $table->string('tempat')->nullable()->after('tanggal_pelaksanaan');
            $table->time('pukul')->nullable()->after('tanggal_pelaksanaan');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('invitations', function (Blueprint $table) {
            //
            $table->dropColumn('tempat');
            $table->dropColumn('pukul');
        });
    }
};
