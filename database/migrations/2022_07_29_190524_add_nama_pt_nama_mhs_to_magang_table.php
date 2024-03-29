<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddNamaPtNamaMhsToMagangTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('magang', function (Blueprint $table) {
            $table->string('nama_pt')->nullable()->after('status');
            $table->string('nama_mhs')->nullable()->after('status');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('magang', function (Blueprint $table) {
            //
        });
    }
}
