<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePositionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('positions', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('id_perusahaan')->nullable();
            $table->string('name')->nullable();
            $table->string('position')->nullable();
            $table->date('date')->nullable();
            $table->string('status')->nullable();
            $table->string('jobdesc_1')->nullable();
            $table->string('jobdesc_2')->nullable();
            $table->string('jobdesc_3')->nullable();
            $table->string('jobdesc_4')->nullable();
            $table->string('jobdesc_5')->nullable();
            $table->string('requirements_1')->nullable();
            $table->string('requirements_2')->nullable();
            $table->string('requirements_3')->nullable();
            $table->string('requirements_4')->nullable();
            $table->string('requirements_5')->nullable();
            $table->string('descriptions')->nullable();
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
        Schema::dropIfExists('positions');
    }
}
